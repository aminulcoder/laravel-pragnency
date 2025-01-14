@php
    use App\Models\Review\Review;
    $reviews = Review::where('status', true)->count();
@endphp

<header class="sticky top-0 bg-white mynavbar z-50">
    <div class="container mx-auto flex items-center justify-between lg:py-2 py-2 px-3 lg:px-0">
        <div class="flex items-center space-x-6 ">
            <a href="{{ route('homepage') }}" class="flex-none text-xl font-semibold dark:text-white">

                {{-- <div class="relative">
                    <img class="w-12 h-12 lg:w-14 lg:h-14 rounded-full hover:ring-2 hover:ring-green-400" src="{{asset('logo.jpg')}}" alt="">
                    <span class="bottom-0 left-9 lg:left-10 absolute w-3.5 h-3.5 lg:w-4 lg:h-4 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                </div> --}}
                <div class="relative">
                    <img class="w-12 h-12 lg:w-14 lg:h-14 rounded-full hover:ring-2 hover:ring-green-400" src="{{asset('logo.jpg')}}" alt="">
                    <span class="relative flex h-3 w-3 bottom-2.5 lg:bottom-3 left-9 lg:left-10">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 lg:h-3 w-2.5 lg:w-3 bg-green-400"></span>
                    </span>
                </div>


                {{-- <img src="{{ asset('img/logo.webp') }}" alt="" class="w-12 lg:w-14 h-12 lg:h-14 hover:animate-pulse ring-2 lg:ring-0 ring-cyan-500 rounded-full lg:rounded-none hover:ring-1 hover:ring-brand  hover:rounded-full"> --}}
            </a>
            <div class="space-y-2">
                <div class="flex items-center space-x-2">
                    <a href="{{ route('aboutpage') }}" class="sm:text-lg text-xl md:text-[22px] lg:text-2xl font-bold hover:text-brand">
                        Monodeep Samanta
                    </a>
                    <div class="hidden lg:flex items-center space-x-2">
                        <button type="button"
                            class="py-1 group group-hover:text-green-400 px-2 inline-flex items-center gap-x-1 font-bold rounded-md border border-gray-200 bg-[#222325] text-white disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 group-hover:text-green-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                              </svg>

                            <span class="text-[12px] leading-[12px] py-[2px] group-hover:text-green-400">PRO VERIFIED</span>
                        </button>
                        <div class="flex space-x-1 group">
                            <a href="{{route('reviewpage')}}" class=" group-hover:text-yellow-400">
                                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </a>
                            <a href="{{route('reviewpage')}}" class=" group-hover:text-yellow-400">
                                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </a>
                            <a href="{{route('reviewpage')}}" class=" group-hover:text-yellow-400">
                                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </a>
                            <a href="{{route('reviewpage')}}" class=" group-hover:text-yellow-400">
                                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </a>
                            <a href="{{route('reviewpage')}}" class=" group-hover:text-yellow-400">
                                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="{{route('reviewpage')}}" class="text-base leading-[14px] font-medium text-black hover:text-brand">5.0
                                ({{ $reviews }}
                                reviews)
                            </a>
                        </div>
                    </div>

                </div>
                <h1 class="hidden lg:block text-sm text-black font-medium leading-[24px]">Multi Award Winning United
                    Kingdom Designer </h1>
            </div>
        </div>
        <div class="">
            @include('inc.topmenuoffcancas')
            <div class="space-x-3 hidden lg:flex">
                <button type="button" onclick="tidioChatApi.display(true);tidioChatApi.open()"
                    class="chat-button group bg-brand py-2 px-3 inline-flex items-center gap-x-2 text-md font-bold rounded-sm bg-primary text-white hover:bg-black disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path
                            d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                    </svg>
                    Instant Reply
                </button>
                <a href="{{ route('aboutpage') }}"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-md font-bold rounded-sm border border-black bg-white hover:bg-black text-black hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    More About Me
                </a>
            </div>
            <div class="hidden md:flex items-center justify-end space-y-1 space-x-1">
                <svg class="text-brand w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
                <span class="text-sm py-1">Average response time 1h</span>
            </div>
        </div>
    </div>
</header>

{{-- sticky top-24 z-50 --}}

<section id="mymunebar" class=" hidden md:block  bg-white border-b px-4 2xlg:px-0 transition-all">
    <nav class="bg-white flex space-x-6 text-gray-400 container mx-auto">
        <a href="{{ route('homepage') }}"
            class="@if (request()->routeIs('homepage')) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap  focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2 hover:text-brand">
            Home
        </a>

        <a href="{{ route('portfoliopage') }}"
            class="@if (request()->routeIs(['portfoliopage', 'singleportfolio', 'portfoliocategorypage'])) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap  focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2 hover:text-brand">
            Portfolio
        </a>
        <a href="{{ route('aboutpage') }}"
            class="@if (request()->routeIs('aboutpage')) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2 hover:text-brand">
            About Me
        </a>
        <a href="{{ route('servicepage') }}"
            class="@if (request()->routeIs(['servicepage', 'singleservice'])) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2 hover:text-brand">
            Services
        </a>
        <a href="{{ route('reviewpage') }}"
            class="@if (request()->routeIs('reviewpage')) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2 hover:text-brand">
            Reviews
        </a>
        <a href="{{ route('blogpage') }}"
            class="@if (request()->routeIs(['blogpage', 'postpage', 'singlepost', 'singleblog'])) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2 hover:text-brand">
            Blog
        </a>

    </nav>
</section>
