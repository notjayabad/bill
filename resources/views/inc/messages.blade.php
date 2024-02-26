@if(count($errors) > 0)
    @php
        $count = 0;   
    @endphp
    @foreach ($errors->all() as $error)
    <div class="w-full text-white bg-red-500" id="alert-{{$count}}" role="alert">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <div class="flex">
                    <svg aria-hidden="true" viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                    </svg>
                    <p class="mx-3">{{$error}}</p>
                </div>
                <div class="flex">
                <button type="button" class="text-white bg-red-500" data-dismiss-target="#alert-{{$count}}" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            </div>
        </div>
    </div>
    @php
        $count++;   
    @endphp
    @endforeach
@endif

@if(session('success'))
        <div class="w-full text-white bg-green-500" id="alert" role="alert">
            <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <div class="flex">
                        <svg aria-hidden="true" viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                        </svg>
                        <p class="mx-3">{{session('success')}}</p>
                    </div>
                    <div class="flex">
                    <button type="button" class="text-white bg-green-500" data-dismiss-target="#alert" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                </div>
            </div>
        </div>
@endif

@if(session('error'))
    @php
        $count = 0;   
    @endphp
    @foreach ($errors->all() as $error)
    <div class="w-full text-white bg-red-500" id="alert-{{$count}}" role="alert">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <div class="flex">
                    <svg aria-hidden="true" viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                    </svg>
                    <p class="mx-3">{{session('error')}}</p>
                </div>
                <div class="flex">
                <button type="button" class="text-white bg-red-500" data-dismiss-target="#alert-{{$count}}" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            </div>
        </div>
    </div>
    @php
        $count++;   
    @endphp
    @endforeach
@endif

