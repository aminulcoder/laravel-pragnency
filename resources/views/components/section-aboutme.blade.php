@php

    use App\Models\Setting\WebsiteSetting;
    use App\Models\Skill\Skill;
    $site = WebsiteSetting::first();
    $skills = Skill::get();
@endphp

<section class="container mx-auto px-3 lg:px-0 pb-[25px] pt-2 lg:pt-8">
    <div class="flex flex-row items-center justify-between">
        <x-heading.heading-one>
            <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg>
            <x-h1>About Me</x-h1>
        </x-heading.heading-one>
    </div>
</section>

{{-- @php
use App\Models\Setting\WebsiteSetting;
    $site = WebsiteSetting::all();
@endphp --}}
<section class="container px-3 mx-auto lg:px-0">
    <div class="grid grid-cols-12 gap-4">
        <div class="order-2 col-span-12 lg:col-span-8 lg:order-1">
            <div class="pr-12 mb-5 space-y-2 text-lg md:mb-0" data-aos="fade-up" data-aos-duration="1000">

                <p class="leading-[26px]">{!!$site->aboutme!!}</p>
            </div>
            <div class="hidden md:block" data-aos="fade-up" data-aos-duration="1000">

                <div class="flex flex-row items-center justify-between py-3 lg:pt-8 lg:pb-6">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                        <h3 class="text-lg lg:text-[26px] font-bold">I’m Expert In</h3>
                    </div>
                </div>


                @foreach ( $skills as $skill)
                    <a  href="{{route('blogpage',['search'=> $skill->slug])}}"  class="btn inline-block" style="font-size: 14px">{{ $skill->title}}</a>
                @endforeach
               {{-- <button class="btn" style="font-size: 14px">App Design</button> --}}

            </div>
            {{-- <div class="hidden h-24 lg:block"></div> --}}
        </div>
        <div class="order-1 col-span-12 lg:col-span-4 lg:order-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="w-full p-4 border rounded-md">
                <div class="space-y-5">
                    <div class="flex items-center py-2 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>

                        <span class="text-md">15 Years of Experience</span>
                    </div>
                    <p class="text-lg font-bold">I speak</p>
                    <P class="leading-[14px] pb-2"><span class="text-[#aaaaaa] text-sm font-semibold leading-[14px]">English
                        </span> <span class="text-brand font-bold leading-[14px]">Fluent</span></P>
                    <h3 class="text-[18px] leading-[18px] font-semibold py-2 pt-2">My Online presence</h3>
                    <div class="inline-flex items-center mt-3 space-x-6">
                        <a href="https://www.behance.net/monodeepsamanta" target="_blank"
                            class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-brand bg-black hover:text-white rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-behance" viewBox="0 0 16 16">
                                <path
                                    d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z" />
                            </svg>
                        </a>
                        <a href="https://dribbble.com/monodeepsamanta" target="_blank"
                            class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-brand bg-black hover:text-white rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8m5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837m3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z" />
                            </svg>
                        </a>
                        <a href="https://www.flickr.com/photos/monodeepsamanta/" target="_blank"
                            class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-brand bg-black hover:text-white rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800">
                            <img class="w-6 h-6" src="{{ asset('img/icon/flickr.png') }}" alt="">
                        </a>
                        <a target="_blank"
                            class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-brand bg-black hover:text-white rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800"
                            href="#">
                            <img class="w-6 h-6" src="{{ asset('img/icon/500px-monogramwhite.png') }}" alt="">
                        </a>
                        <a href="https://www.linkedin.com/in/monodeepsamanta/" target="_blank"
                            class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-brand bg-black hover:text-white rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4" />
                            </svg>
                        </a>
                    </div>
                    <p class="text-lg font-medium">Contact Me On</p>
                </div>
                <a class="block w-full bg-black hover:bg-[#FF003A] text-white text-center text-base py-2 rounded-md my-3"
                    href="https://wa.me/+447810293819">Via What's App</a>

                <a href="skype:monodeep123"
                    class="block w-full bg-black hover:bg-[#FF003A] text-white text-center text-base py-2 rounded-md my-3">Via
                    Skype</a>

                <a href="mailto:monodeepsamanta@gmail.com"
                    class="block w-full bg-black hover:bg-[#FF003A] text-white text-center text-base py-2 rounded-md my-3">Via
                    Email</a>
            </div>
        </div>
    </div>
</section>
