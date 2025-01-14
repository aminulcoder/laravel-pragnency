@php
    use App\Models\Service\Service;
    $services = Service::with('package')->take(6)->get();
@endphp

<section class="container mx-auto px-3 lg:px-0 py-[30px]">
    <div class="flex flex-row items-center justify-between">
        <x-heading.heading-one>
            <x-icon.listcheck />
            <x-h1>See My Services</x-h1>
        </x-heading.heading-one>
        <x-arrow-link route="servicepage">
            See All Services
        </x-arrow-link>
    </div>
</section>

<section class="hidden md:block container mx-auto px-3 lg:px-0">
    <div class="grid-cols-12 gap-3 lg:grid">
        @foreach ($services as $service)
            <a href="{{ route('singleservice', $service->slug) }}" class="col-span-12 p-3 border group md:col-span-6 lg:col-span-4" data-aos="fade"
                data-aos-duration="2000">
                <div class="relative overflow-hidden font-bold text-white rounded-md shadow cursor-pointer">
                    @if ($service->video)
                        <video autoplay loop muted class="w-full h-full">
                            <source src="{{ video_link($service->video) }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ asset('storage/' . $service->thumbnail) }}"
                            class="transition duration-500 group-hover:scale-110 group-hover:rotate-3" alt="">
                    @endif
                </div>
                <div class="py-2 mt-5 space-y-1">
                    <h3 class="text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                    <h2 class="text-lg text-brand font-bold">Starting at ${{ $service->package->starter_price ?? '' }} </h2>
                </div>
            </a>
        @endforeach

    </div>
</section>
{{-- Mobile service slider start --}}
<div class="md:hidden container mx-auto px-3 lg:px-0">
    <div id="serviceslider" class="grid grid-cols-2 gap-2 owl-carousel owl-theme sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($services as $service)
            <a href="{{ route('singleservice', $service->slug) }}" class="col-span-12 p-3 md:col-span-6 lg:col-span-4"
                data-aos="fade" data-aos-duration="2000">
                <div class="relative overflow-hidden font-bold text-white rounded-md shadow cursor-pointer">
                    <img src="{{ asset('storage/' . $service->thumbnail) }}"
                        class="transition duration-500 group-hover:scale-110 group-hover:rotate-3" alt="">
                </div>
                <div class="py-2 mt-5 space-y-1">
                    <h3 class="text-md lg:text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                    <h2 class="font-normal text-md text-brand lg:text-lg">Starting at
                        ${{ $service->package->starter_price ?? '' }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</div>
