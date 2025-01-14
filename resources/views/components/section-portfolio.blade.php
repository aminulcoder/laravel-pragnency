@php
    use App\Models\Category;
    $categories = Category::get();
@endphp
<section class="container mx-auto px-3 lg:px-0 pb-[30px] max-[768px]:pt-3 min-[768px]:py-[30px]">
    <div class="flex flex-row items-center justify-between">
        <x-heading.heading-one>
            <x-icon.photo />
            <x-h1>Check Out My Portfolio</x-h1>
        </x-heading.heading-one>
        <x-arrow-link route="portfoliopage">
            <span class=" max-[399px]:hidden">See All Portfolios</span>
        </x-arrow-link>
    </div>
</section>
<section class="container hidden px-3 mx-auto lg:block lg:px-0">
    <div class="grid grid-cols-12 gap-4">
        @foreach ($categories as $category)
            <a href="{{ route('portfoliopage', ['category' => $category->slug]) }}"
                class="relative col-span-12 overflow-hidden font-bold text-white rounded-md shadow cursor-pointer md:col-span-6 lg:col-span-3 group">
                <!--layer start-->
                <div
                    class="absolute top-0 left-0 z-10 hidden w-full h-full transition bg-gradient-to-t from-gray-800 opacity-70 group-hover:block">
                </div>
                <!--layer end-->
                <img class="object-top w-full transition duration-500 group-hover:scale-110 group-hover:rotate-3"
                    src="{{ asset('storage/' . $category->thumbnail) }}" alt="thumbnail">
                <div
                    class="absolute bottom-0 z-10 hidden space-y-2 group-hover:bottom-6 group-hover:left-6 group-hover:block">
                    <h1 class="text-2xl">{{ $category->name }}</h1>
                    <span class="hover:text-[#FF003A] transition flex items-center space-x-2">
                        <span>See All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                </div>
            </a>
        @endforeach
    </div>
</section>


<section class="container px-3 mx-auto lg:hidden lg:px-0">
    <div id="portfolioSlider" class="grid grid-cols-12 gap-4 owl-carousel owl-theme">
        @foreach ($categories as $category)
            <a href="{{ route('portfoliopage', ['category' => $category->slug]) }}"
                class="relative col-span-12 overflow-hidden font-bold text-white rounded-md shadow cursor-pointer md:col-span-6 lg:col-span-3 group" style="overflow: hidden">
                <!--layer start-->
                <div
                    class="absolute top-0 left-0 hidden w-full h-full transition bg-gradient-to-t from-gray-800 opacity-70 group-hover:block">
                </div>
                <!--layer end-->
                <img class="object-top w-full transition duration-500 group-hover:scale-110 group-hover:rotate-3"
                    src="{{ asset('storage/' . $category->thumbnail) }}" alt="thumbnail">
                <div
                    class="absolute bottom-0 hidden space-y-2 group-hover:bottom-6 group-hover:left-6 group-hover:block">
                    <h1 class="text-2xl">{{ $category->name }}</h1>
                    <span class="hover:text-[#FF003A] transition flex items-center space-x-2">
                        <span>See All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                </div>
            </a>
        @endforeach
    </div>
</section>
