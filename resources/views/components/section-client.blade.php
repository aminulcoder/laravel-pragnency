
<section class="container mx-auto px-3 lg:px-0 py-[30px]">
    <div class="flex flex-row items-center justify-between">
        <x-heading.heading-one>
            <x-icon.lock />
            <x-h1>Clients</x-h1>
        </x-heading.heading-one>
    </div>
</section>


<section class="container mx-auto px-3 lg:px-0">
    <div id="clientSlider" class="grid-cols-12 gap-4 lg:grid owl-carousel">
        <div class="flex justify-center col-span-3 border md:col-span-2">
            <img class="object-center" src="{{ asset('img/client/Group1.jpg') }}" alt="">
        </div>
        <div class="flex justify-center col-span-3 border md:col-span-2">
            <img class="object-center" src="{{ asset('img/client/Group2.jpg') }}" alt="">
        </div>
        <div class="flex justify-center col-span-3 border md:col-span-2">
            <img class="object-center" src="{{ asset('img/client/Group3.jpg') }}" alt="">
        </div>
        <div class="flex justify-center col-span-3 border md:col-span-2">
            <img class="object-center" src="{{ asset('img/client/Group4.jpg') }}" alt="">
        </div>
        <div class="flex justify-center col-span-3 border md:col-span-2">
            <img class="object-center" src="{{ asset('img/client/Group5.jpg') }}" alt="">
        </div>
        <div class="flex justify-center col-span-3 border md:col-span-2">
            <img class="object-center" src="{{ asset('img/client/Group6.jpg') }}" alt="">
        </div>
    </div>

</section>
