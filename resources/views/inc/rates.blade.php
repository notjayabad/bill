<section class="bg-white dark:bg-gray-800 py-2">
    @if(isset($rates))
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <dl class="grid max-w-screen-md gap-8 lg:gap-12 mx-auto text-gray-900 sm:grid-cols-4 dark:text-white ">
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">₱{{$rates->residential}}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Residential</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold"> ₱{{$rates->low_voltage}}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Low Voltage</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">₱{{$rates->high_voltage}}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">High Voltage</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">₱{{$rates->generation}}</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">Generation Charge</dd>
          </div>
        </dl>
      @endif
    </div>
</section>