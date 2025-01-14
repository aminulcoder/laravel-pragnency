@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Admin" pageoneRoute="{{ route('admin.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <main>
        <form action="{{ route('admin.profile.update', $adminprofile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 px-1 pt-1 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                <!-- Right Content -->
                <div class="col-span-full xl:col-auto">
                    <div
                        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                        <div class="flex justify-center">

                            <div class="flex items-center justify-center w-full max-h-72 py-2">
                                <div for="dropzone-file" id="dropZoneArea"
                                    class="flex flex-col items-center justify-center w-64 h-64 border-2 border-gray-300 border-dashed  bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 rounded-full">
                                    @if (auth()->user()->thumbnail)
                                        <div class="relative group">
                                            <button type="button" id="removeThumbnail"
                                                class="absolute right-0 p-2 m-4 hidden group-hover:block transition duration-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                            <input type="hidden" name="thumbnail" value="{{ $adminprofile->thumbnail }}">
                                            <img class="max-h-60 w-auto rounded-full p-4"
                                                src="{{ asset('uploads/galleries/' . $adminprofile->thumbnail) }}"
                                                alt="thumbnail">
                                        </div>
                                    @else
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6 cursor-pointer"
                                            onclick="showModal()">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>

                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to
                                                    upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                                800x400px)</p>
                                        </div>
                                    @endif



                                </div>
                            </div>
                        </div>
                        <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                            <div class="justify-center text-gray-500 dark:text-gray-400">
                                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>
                                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                    JPG, GIF or PNG. Max size of 800K
                                </div>

                                <div class="grid grid-cols-5 px-1 py-1  mt-5">
                                    <h4 class="col-span-2">Name</h4>
                                    <p class="col-span-3">{{ $adminprofile->name }}</p>
                                </div>
                                <div class="grid grid-cols-5 px-1 py-1  mt-5">
                                    <h4 class="col-span-2">Role</h4>
                                    <p class="col-span-3">{{ auth()->user()->roles()->first()->name }}</p>
                                </div>
                                <div class="grid grid-cols-5 px-1 py-1  mt-5">
                                    <h4 class="col-span-2">Email</h4>
                                    <p class="col-span-3">{{ $adminprofile->email }}</p>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-span-2">
                    <div
                        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="flex justify-between">
                            <div>
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">Change your name!
                                </h3>
                            </div>
                            <div>
                                <a href="{{ route('admin.profile.resetpassword', $adminprofile->id) }}"
                                    class="py-1 my-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                    Password Reset</a>
                            </div>
                        </div>
                        <x-form.input name="email" label="Email" type="email" disable="disabled"
                            value="{{ $adminprofile->email }}" />
                        <x-form.input label="Name" name="name" value="{{ $adminprofile->name }}" />
                        <x-form.submit-button title="Update Name" />

                    </div>
                </div>

            </div>

        </form>
    </main>
@endsection
@push('styles')
    <style>
        #dropZoneArea img {
            border-radius: 9999px;
            width: 200px;
            height: 200px;
        }
    </style>
@endpush

@push('scripts')
@endpush
