@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/jquery.inputmask.bundle.min.js') }}" ></script>

<section class="bg-gray-100 dark:bg-gray-900 tracking-tight leading-normal">
    <div class="py-8 px-2 mx-auto max-w-screen-xl text-center lg:py-20 lg:px-12">
        <h1 class="mb-4 text-5xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none text-gray-900  dark:text-white">Check your CASURECO II Bill</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">It helps if your bill is on hand...</p>
        {!! Form::open(['action' => 'HomeController@search', 'method' => 'GET']) !!} <!-- GET Method-->
            <div class="flex sm:flex-row flex-col justify-between w-full mx-auto">
                <div class="w-full text-left lg:px-2">
                    <label for="acct_no" class="ml-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                    <input required type="tel" name="acct_no" id="acct_no" placeholder="ex. 123456" maxlength="6" class="mb-2 flex block w-full p-4 sm:mx-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="w-full text-left lg:px-2">
                    <label for="route_code" class="ml-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Route Code</label>
                    <input required type="text" name="route_code" id="route_code" placeholder="ex. AB0123410" minlength="8" maxlength="9" class="uppercase mb-2 flex block w-full p-4 sm:mx-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">  
                </div>
                <button type="submit" class="py-2 flex text-white items-center bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-2xl text-sm text-center px-4 py-4 mb-2 mt-2 lg:mt-6 sm:mx-2" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" class="w-6 h-6 mr-2">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    Search
                </button>
            </div>
        {!! Form::close() !!} 
    </div>
</section>
    @if ($bill_query === 0)
    @elseif (is_null($bill_query))
        <p>No Records Found</p>
    @else
        <section class="bg-gray-300 lg:px-8 py-4 lg:py-12 dark:bg-gray-900 tracking-tight leading-normal mx-auto w-full">
            @include('bill.another_bill')
        </section>
    @endif

<!-- Rates Section -->
@include('inc.rates')


  
<!-- Main modal -->
<script type="text/javascript" src="{{ asset('js/do_something.js') }}" ></script>

@endsection