<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        $rates = Rate::orderBy('year', 'desc')->orderBy('month', 'desc')->first();

        return view('index')->with('rates', $rates)->with('bill_query', 0);
    }

    /**
     * Store a newly created resource in storage.
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
     
         // Sanitize input values
         $acct_no = preg_replace("/[^0-9]/", "", $request->input('acct_no'));
         $route_code_san = preg_replace("/[^0-9a-zA-Z ]/", "", $request->input('route_code'));
         $route_code = substr($route_code_san, 0, 3);
     
         // Query database if inputs are valid
         $bill_query = Bill::where('account_no', $acct_no)
                           ->where('route_code', 'like', $route_code.'%')
                           ->first();
         $rates = Rate::orderBy('year', 'desc')
                      ->orderBy('month', 'desc')
                      ->first();
     
         // Format bill month, returns null if bill_query is invalid
         $bill_month = $bill_query ? date("F Y", strtotime(implode("-", str_split($bill_query->bill_month, 4)))) : null;
         // get payment, returns null if bill_query is invalid
         $payment = $bill_query ? $this->get_payment($bill_query->due_date, $bill_query->amount_before_due, $bill_query->amount_after_due): null;
         // sums bill, returns null if bill_query is invalid
         $total_bill = $bill_query ? $bill_query->penalty+$bill_query->arrears+$bill_query->current_power_bill : null;
     
         return view('index', [
             'bill_query' => $bill_query,
             'rates' => $rates,
             'bill_month' => $bill_month,
             'payment' => $payment,
             'total_bill' => $total_bill,
         ]);
     }
     
    /**
     * Determine the payment based on the due date compared to the current date.
     *
     * @param string $due_date The due date of the payment.
     * @param mixed $due_before The payment to be made if the due date is on or after the current date.
     * @param mixed $due_after The payment to be made if the due date is before the current date.
     * @return mixed The appropriate payment based on the due date.
     */
    protected function get_payment($due_date, $due_before, $due_after) {
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


}

