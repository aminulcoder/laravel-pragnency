<x-setting.setting-master title="Hompage Setting">

    <div class="p-4">
        <div class="p-2">

            <form action="{{ route('website.setting.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <label for="site_title" class="block text-sm font-medium mb-2 text-gray-500">Site Title</label>
                <div class="flex rounded-lg shadow-sm">
                    <span
                        class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M17.834 6.166a8.25 8.25 0 1 0 0 11.668.75.75 0 0 1 1.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0 1 21.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 1 1-.82-6.26V8.25a.75.75 0 0 1 1.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 0 0-2.416-5.834ZM15.75 12a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" id="site_title" name="site_title" value="{{ $site->site_title }}"
                        class="  block w-full border-gray-200 shadow-sm rounded-0 text-sm focus:border-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:outline-none focus:ring-0"
                        placeholder="please enter your title">
                </div>

                <label for="logo" class="block text-sm font-medium mb-2 text-gray-500 pt-2">Site Logo</label>
                <div class="flex ">
                    <div class="w-full">

                        <input class="dropify" type="file" id="myDropify" name="logo" data-default-file="{{ asset('storage/' . $site->logo) }}">
                    </div>
                </div>

                <x-form.submit-button />
            </form>
        </div>

    </div>


    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
        <style>
            .dropify-message p {
                font-size: 24px
            }
        </style>
    @endpush

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="{{ asset('js/dropify.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.dropify').dropify({
                    messages: {
                        'default': 'Drag and drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove': 'Remove',
                        'error': 'Ooops, something wrong happended.'
                    }
                });
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endpush
</x-setting.setting-master>
