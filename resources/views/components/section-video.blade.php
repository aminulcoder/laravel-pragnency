@if (option('testmonial_video'))
<section class="container mx-auto px-3 lg:px-0 py-[30px]">
    <div class="flex flex-row items-center justify-between">
        <x-heading.heading-one>
            <x-icon.clients />
            <x-h1>Client Opinions</x-h1>
        </x-heading.heading-one>
        <x-arrow-link route="reviewpage">
            See All Testmonials
        </x-arrow-link>
    </div>
</section>

<section class="container mx-auto px-3 lg:px-0">
    {!! option('testmonial_video') !!}
</section>
@endif
