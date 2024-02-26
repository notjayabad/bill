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
    public function index()
    {
        $rates = Rate::orderBy('year', 'desc')->orderBy('month', 'desc')->first();

        return view('index')->with('rates', $rates)->with('bill_query', NULL);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'acct_no' => 'required',
            'route_code' => 'required',
            'month' => 'required',
        ]);

        $acct_no = $request->input('acct_no');
        $route_code = $request->input('route_code');
        $month = $request->input('month');

        $bill_query = Bill::where('account_no', '=', $acct_no)->get();

        return redirect('/test');
    }

    public function search(Request $request)
    {
        $acct_no_in = $request->input('acct_no');
        $route_code = $request->input('route_code');
        $month = $request->input('month');

        $rates = Rate::orderBy('year', 'desc')->orderBy('month', 'desc')->first(); 
        $bill_query = Bill::paginate(5);

        return view('index')->with('bill_query', $bill_query)->with('acct_no_in', $acct_no_in)->with('rates', $rates);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test_index()
    {
        $bill_query = NULL;

        return view('/test')->with('bill_query', $bill_query);
        
    }

    public function test_query()
    {
        return view('/query');
        
    }
}
