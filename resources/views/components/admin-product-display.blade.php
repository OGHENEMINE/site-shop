@props(['price' => '0.00', 'title' => 'project title', 'description' => 'this is the site description', 'published_at' => 'not published', 'id' => '#', 'image' => "https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"])

<div class="relative tracking-wider border p-5 rounded-md shadow-sm sm:flex bg-inherit dark:border-gray-600 dark:shadow-neutral-700/70">
    <!-- Left Section -->
    <div class="w-2/3 pr-5 border-r border-gray-300 dark:border-gray-600">
        <div class="relative w-full rounded-sm overflow-hidden pt-[30%] mb-2">
            <img class="absolute top-0 start-0 object-cover w-full h-full" src="{{ asset("$image") }}" alt="Website screenshot">
        </div>

        <div class="text-sm space-y-1 text-gray-800 dark:text-white">
            <h3 class="text-lg font-bold capitalize">
                {{$title}}
            </h3>
            <p>
                {{$description}}
            </p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="w-1/3 pl-5 flex flex-col items-center justify-center space-y-5">
        <div class="flex flex-col items-center space-y-2">
            <p class="font-bold text-lg text-white">$ {{$price}}</p>
            <p class="text-xs text-gray-500 dark:text-neutral-500">
                Published at: {{$published_at}}
            </p>
        </div>

        <div class="flex items-center gap-2">
            <a href="#" class="p-2.5 inline-block text-sm font-medium text-white rounded-sm dark:text-white border">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                </svg>
            </a>
            <a href="#" class="flex-1 text-center py-2.5 gap-1 px-10 text-sm font-medium text-white rounded-sm border">
                Live preview
            </a>
            <a href="#" class="p-2 text-sm font-medium text-white border rounded-sm dark:text-white">
                <img class="w-6 h-6" src="{{asset('images/whatsapp.png')}}" alt="WhatsApp Logo">
            </a>
        </div>
    </div>

    <!-- Full Card Link -->
    <a href="{{route('shop.show', $id)}}" class="absolute inset-0 z-10"></a>
</div>