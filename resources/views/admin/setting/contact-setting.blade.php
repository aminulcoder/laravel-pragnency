<x-setting.setting-master title="Contact Setting">

    <div class="p-4">
        <form action="{{ route('contact.setting.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="p-2">
                <label for="email" class="block text-sm font-medium mb-2 text-gray-500">Email</label>
                <div class="flex rounded-lg shadow-sm">
                    <span
                        class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M17.834 6.166a8.25 8.25 0 1 0 0 11.668.75.75 0 0 1 1.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0 1 21.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 1 1-.82-6.26V8.25a.75.75 0 0 1 1.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 0 0-2.416-5.834ZM15.75 12a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" id="email" name="email" value="{{ $site->email }}"
                        class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                        placeholder="faruqhossen30@gmail.com">
                </div>
            </div>
            <div class="p-2">
                <label for="address"
                    class="block text-sm font-medium mb-2  dark:text-gray-400 text-gray-500">Address</label>
                <div class="flex rounded-lg shadow-sm">
                    <span
                        class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                    </span>
                    <input type="text" id="address" name="address" value="{{ $site->address }}"
                        class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                        placeholder="G5WF+3HF Jhenadaho">
                </div>
            </div>

            <div class="p-2">
                <label for="contact_no" class="block text-sm font-medium mb-2 text-gray-500 ">Contact No</label>
                <div class="flex rounded-lg shadow-sm">
                    <span
                        class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                    </span>
                    <input type="text" id="contact_no" name="contact_no" value="{{ $site->contact_no }}"
                        class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                        placeholder="+013">
                </div>
            </div>
            <div class="p-2">
                <label for="mobile_no" class="block text-sm font-medium mb-2 text-gray-500">Mobile No</label>
                <div class="flex rounded-lg shadow-sm">
                    <span
                        class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-phone" viewBox="0 0 16 16">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                    </span>
                    <input type="text" id="mobile_no" name="mobile_no" value="{{ $site->mobile_no }}"
                        class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                        placeholder="+8801000000000">
                </div>
            </div>
            <div>
                <x-form.submit-button />
            </div>
        </form>
    </div>
</x-setting.setting-master>
