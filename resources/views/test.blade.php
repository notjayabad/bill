{!! Form::open(['action' => 'HomeController@search', 'method' => 'GET']) !!} <!-- Post Method-->
<div class="flex sm:flex-row flex-col justify-between w-full mx-auto">
    <div class="w-full text-left px-2">
        <label for="acct_no" class="block ml-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
        <input type="number" name="acct_no" id="acct_no" placeholder="ex. 123456" maxlength="6" class="mb-2 flex block w-full p-4 sm:mx-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="w-full text-left px-2 flex flex-col mx-auto">
        <label for="route_code" class="flex block ml-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Route Code</label>
        <input  type="text" name="route_code" id="route_code" placeholder="ex. AB0-1234-1" class="mb-2 inline-flex w-full p-4 mx-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 uppercase">  
    </div>
    <div class="w-full text-left px-2 ">
        <label for="month" class="block ml-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Bill Month</label>
        <input  type="month" name="month" id="month" class="mb-2 flex block w-full p-4 sm:mx-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <button type="submit" class="py-2 flex text-white items-center bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-2xl text-sm text-center px-4 py-4 mb-2 mt-2 lg:mt-6 sm:mx-2" >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" class="w-6 h-6 mr-2">
            <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        Search
    </button>
</div>
{!! Form::close() !!} 

@if ($bill_query != NULL)
{{$acct_no_in}}
    <ul>
       
        @foreach ($bill_query as $result)
            <li>{{ $result->route_code }}</li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
