<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Bill;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::orderByDesc('year')->orderByDesc('month')->first();
        $bill_query = 0; // Initialize bill query to 0
        $date = $this->show_as_of_date();

        return view('index', compact('rates', 'bill_query', 'date'));
    }

    /**
     * Search for a bill based on account number and route code.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'acct_no' => 'required|numeric',
            'route_code' => 'required|alpha_num|min:3',
        ]);

        $date = $this->show_as_of_date();


        // Sanitize input values
        $acct_no = preg_replace("/[^0-9]/", "", $request->input('acct_no'));
        $route_code_san = preg_replace("/[^0-9a-zA-Z ]/", "", $request->input('route_code'));
        $route_code = substr($route_code_san, 0, 3);

        // Query database if inputs are valid
        $bill_query = Bill::where('account_no', $acct_no)
                          ->where('route_code', 'like', $route_code.'%') 
                          //->where('route_code', $route_code)
                          ->first();
        $rates = Rate::orderByDesc('year')
                     ->orderByDesc('month')
                     ->first();

        // Format bill month, payment, and total bill 
        $bill_month = $bill_query ? date("F Y", strtotime(implode("-", str_split($bill_query->bill_month, 4)))) : null;
        $payment = $bill_query ? $this->getPayment($bill_query->due_date, $bill_query->amount_before_due, $bill_query->amount_after_due) : null;
        $total_bill = $bill_query ? $bill_query->penalty + $bill_query->arrears + $bill_query->current_power_bill : null;

        return view('index', compact('bill_query', 'rates', 'bill_month', 'payment', 'total_bill', 'date'));
    }

    /**
     * Determine the payment based on the due date compared to the current date.
     *
     * @param string $due_date The due date of the payment.
     * @param mixed $due_before The payment to be made if the due date is on or after the current date.
     * @param mixed $due_after The payment to be made if the due date is before the current date.
     * @return mixed The appropriate payment based on the due date.
     */
    protected function getPayment($due_date, $due_before, $due_after)
    {
        // Get the current date
        $date_now = now()->format("Y-m-d");

        // Determine the payment based on the due date
        return $due_date >= $date_now ? $due_before : $due_after;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('bill/show');
    }

    public function show_as_of_date() {
        $as_of_date = Bill::select('reading_date')
        ->distinct('reading_date')
        ->where([
            ['bill_status', '=', 0],
            ['bill_month', 'like', date('Y') . '%'],
        ])
        ->orderByDesc('reading_date')
        ->value('reading_date');
        return strtotime(substr($as_of_date,0,10));
    }
}
