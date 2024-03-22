    <!-- Invoice -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
      <div class="sm:w-11/12 lg:w-3/4 mx-auto">
        <!-- Card -->
        <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800">
          <!-- Grid -->
          <div class="flex justify-between">
            <div class="flex flex-row">
                <img alt="content" class="object-scale-down w-12 h-12 " src="{{url ('public/assets/c2_logo.ico')}}" loading="lazy">
                <h1 class="hidden sm:block ml-1 mt-1.5 text-lg md:text-xl font-extrabold text-black dark:text-white">CASURECO II</h1>
            </div>
            <!-- Col -->
  
            <div class="text-end">
              <h2 class="mt-1 block text-gray-500 dark:dark:text-gray-400">Kindly Pay</h2>
              <span class="text-4xl font-bold mt-2 text-gray-800 dark:text-gray-200">₱{{number_format($payment, 2, '.', ',')}}</span>
              <p class="mt-4 text-wrap not-italic text-gray-500 dark:text-gray-400">
                Due Date
              <p class="text-2xl font-bold text-gray-800 dark:text-gray-200">
                {{date('F d, Y', strtotime($bill_query->due_date))}}
              </p>
              <p class="mt-4 text-wrap not-italic text-gray-500 dark:text-gray-400">
                Account Number
              <p class="text-2xl font-bold text-gray-800 dark:text-gray-200">
                {{$bill_query->account_no}}
              </p>
            </div>
            <!-- Col -->
          </div>
          <!-- End Grid -->
  
          <!-- Grid -->
          <div class="mt-8 grid sm:grid-cols-2 gap-3">
            <div>
              <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">Name:</h3>
              <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200">{{$bill_query->name}}</h3>
              <h3 class="mt-4 text-lg font-semibold text-gray-500 dark:text-gray-400">Bill Month:</h3>
              <h3 class="text-lg text-gray-800 dark:text-gray-200">{{$bill_month}}</h3>
            </div>
            <!-- Col -->
  
            <div class="sm:text-end space-y-2">
              <!-- Grid -->
              <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                <dl class="grid sm:grid-cols-5 gap-x-3">
                  <dt class="col-span-3 font-semibold text-gray-500 dark:text-gray-400">Reading date:</dt>
                  <dd class="col-span-2 mt-1 text-xs md:text-sm text-gray-800 dark:text-gray-200">{{$bill_query->reading_date}}</dd>
                </dl>
                <dl class="grid sm:grid-cols-5 gap-x-3">
                  <dt class="col-span-3 font-semibold text-gray-500 dark:text-gray-400">Due date:</dt>
                  <dd class="col-span-2 text-gray-800 dark:text-gray-200 text-pretty">{{$bill_query->due_date}}</dd>
                </dl>
              </div>
              <!-- End Grid -->
            </div>
            <!-- Col -->
          </div>
          <!-- End Grid -->
  
          <!-- Table -->
          <div class="mt-6">
            <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
              <div class="hidden sm:grid sm:grid-cols-5"> <!-- start md upwards view -->
                <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">Bill Summary</div>
                <div class="text-start text-xs font-medium text-gray-500 uppercase"></div>
                <div class="text-start text-xs font-medium text-gray-500 uppercase"></div>
                <div class="text-end text-xs font-medium text-gray-500 uppercase">Amount</div>
              </div> <!-- start md upwards view -->
  
              <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>
  
              <div class="grid grid-cols-3 sm:grid-cols-5 gap-2 ">
                <div class="col-span-full sm:col-span-2 ">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="hidden sm:block font-medium text-gray-800 dark:text-gray-200">Current Power Bill</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Bill Summary</h5>
                  <p class="sm:hidden text-sm block text-gray-800 dark:text-gray-200">Current Power Bill</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="text-gray-800 dark:text-gray-200"></p>
                </div>
                <div class="mx-auto sm:mx-0">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                  <p class="sm:text-end mt-1 sm:mt-0 text-gray-800 dark:text-gray-200">₱{{number_format($bill_query->current_power_bill, 2, '.', ',')}}</p>
                </div>
              </div>
  
              <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>
  
              <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                <div class="col-span-full sm:col-span-2">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="sm:block hidden font-medium text-gray-800 dark:text-gray-200">Arrears</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Bill Summary</h5>
                  <p class="sm:hidden block text-gray-800 dark:text-gray-200">Arrears</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="text-gray-800 dark:text-gray-200"></p>
                </div>
                <div class="mx-auto sm:mx-0">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                  <p class="sm:text-end text-gray-800 dark:text-gray-200">₱{{number_format($bill_query->arrears, 2, '.', ',')}}</p>
                </div>
              </div>
  
              <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>
  
              <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                <div class="col-span-full sm:col-span-2">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="sm:block hidden font-medium text-gray-800 dark:text-gray-200">Penalty</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Bill Summary</h5>
                  <p class="sm:hidden block text-gray-800 dark:text-gray-200">Penalty</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="text-gray-800 dark:text-gray-200"></p>
                </div>
                <div class="mx-auto sm:mx-0">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                  <p class="sm:text-end text-gray-800 dark:text-gray-200">₱{{number_format($bill_query->penalty, 2, '.', ',')}}</p>
                </div>
              </div>

              <div class="border-b border-gray-400 dark:border-gray-200"></div>

              <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                <div class="col-span-full sm:col-span-2">
                  <h5 class="hidden sm:block text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="hidden sm:block font-bold text-gray-800 dark:text-gray-200">Total Power Bill</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="sm:hidden mt-2 font-bold text-sm text-gray-800 dark:text-gray-200">Total Power Bill</p>
                </div>
                <div>
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase"></h5>
                  <p class="text-gray-800 dark:text-gray-200"></p>
                </div>
                <div class="mx-auto sm:mx-0 font-bold">
                  <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                  <p class="sm:text-end text-gray-800 dark:text-gray-200">₱{{number_format($total_bill, 2, '.', ',')}}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Table -->
  
          <!-- Flex -->
          <div class="mt-8 mr-2 flex justify-end">
            <div class="sm:w-full max-w-2xl sm:text-end space-y-2">
              <!-- Grid -->
              <div class="grid grid-cols-1 sm:grid-cols-1 gap-3 sm:gap-2">
                <dl class="grid sm:grid-cols-5 gap-x-3">
                  <dt class="col-span-3 text-gray-500 dark:text-gray-400">Amount Before Due:</dt>
                  <dd class="col-span-2 text-gray-800 dark:text-gray-200 font-bold text-xl">₱{{$bill_query->amount_before_due}}</dd>
                </dl>
  
                <dl class="grid sm:grid-cols-5 gap-x-3 mb-4">
                  <dt class="col-span-3 text-gray-500 dark:text-gray-400">Amount After Due:</dt>
                  <dd class="col-span-2 text-gray-800 dark:text-gray-200 font-bold text-xl">₱{{$bill_query->amount_after_due}}</dd>
                </dl>
  
              </div>
              <!-- End Grid -->
            </div>
          </div>
          <!-- End Flex -->
  

        </div>
        <!-- End Card -->
  
        <!-- Buttons -->
        <div class="mt-6 flex justify-end gap-x-3">
          <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
            Invoice PDF
          </a>
          <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect width="12" height="8" x="6" y="14"/></svg>
            Print
          </a>
        </div>
        <!-- End Buttons -->
      </div>
    </div>
    <!-- End Invoice -->