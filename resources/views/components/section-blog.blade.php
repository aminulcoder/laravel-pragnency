@php
    use App\Models\Blog;
    $posts = Blog::latest()->take(3)->get();

@endphp

<section class="container mx-auto px-3 lg:px-0 py-[30px]">
    <div class="flex flex-row items-center justify-between">
        <x-heading.heading-one>
            <x-icon.clients />
            <x-h1>Daily Blogs</x-h1>
        </x-heading.heading-one>
        <x-arrow-link route="blogpage">
            See All Blogs
        </x-arrow-link>
    </div>
</section>

<section class="container mx-auto px-3 lg:px-0">
    <div class="hidden lg:grid grid-cols-12 gap-6">
        @foreach ($posts as $post)
            <a href="#" class="col-span-6 lg:col-span-4 overflow-hidden rounded-lg group dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                data-aos="fade" data-aos-duration="2000" href="{{ route('singleblog', $post->slug) }}">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-lg overflow-hidden">
                    <img class="absolute top-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-lg start-0 group-hover:scale-105"
                        src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                </div>

                <div class="mt-7">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 hover:text-[#FF003A]">
                        {{ $post->title }}
                    </h3>
                </div>
            </a>
        @endforeach
    </div>
</section>
{{-- Blog Slider start --}}
<div class="block lg:hidden container mx-auto px-3 lg:px-0">
    <div id="blogslider" class="grid grid-cols-2 gap-2 owl-carousel owl-theme sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($posts as $post)
            <a class="overflow-hidden rounded-lg group dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                data-aos="fade" data-aos-duration="2000" href="{{ route('singleblog', $post->slug) }}">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-lg overflow-hidden">
                    <img class="absolute top-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-lg start-0 group-hover:scale-105"
                        src="{{ asset('storage/' . $post->thumbnail) }}" alt="Image Description">
                </div>

                <div class="mt-7">
                    <h3 class="font-semibold text-gray-800 text-md lg:text-2xl dark:text-gray-200">
                        {{ $post->title }}
                    </h3>
                </div>
            </a>
        @endforeach


    </div>
</div>

