@php
    use App\Models\GalleryCategory;
    $categories = GalleryCategory::get();
@endphp

<div id="modalEl{{$title}}" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
    <div class="relative max-h-full w-full max-w-4xl">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white lg:text-2xl">
                    Image Gallery
                </h3>
                <button type="button" onclick="hideModal()"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-2">
                <div class="p-4 flex items-center space-x-5">
                    <label for="gallery_category_id"
                        class="block text-sm font-medium mb-2 dark:text-white">Category</label>
                    <select id="gallery_category_id" name="gallery_category_id"
                        class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                        <option value="0">All</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="galleryModalBody"></div>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                <button type="button" onclick="hideModal()"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                    Insert
                </button>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center w-10/12 max-h-72 py-2">
    <div for="dropzone-file" id="dropZoneArea"
        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg  bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6 cursor-pointer" onclick="showModal()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-20 h-20 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                    upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                800x400px)</p>
        </div>

    </div>
</div>

@prepend('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        var myModal = document.getElementById("modalEl{{$title}}");
        const options = {
            placement: "top-center",
            backdrop: "static",
            // backdropClasses: "bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40",
            closable: true,
            onHide: () => {
                $('#galleryModalBody').empty();
            },
            onShow: () => {
                let gallery_category_id = $('select[name="gallery_category_id"]').val();
                console.log(gallery_category_id);
                $.ajax({
                    url: '{{ route('ajax.galleries') }}',
                    data: {
                        gallery_category_id: gallery_category_id
                    },
                    success: function(res) {
                        console.log(res);
                        $('#galleryModalBody').append(res);
                    }
                })
                console.log("modal is shown");
            },
            onToggle: () => {
                console.log("modal has been toggled");
            },
        };

        function showModal() {
            var myModalObject = new Modal(myModal, options);
            myModalObject.show();
        }

        function hideModal() {
            var myModalObject = new Modal(myModal, options);
            myModalObject.hide();
        }
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('change', 'select[name="gallery_category_id"]', function(e) {
            let gallery_category_id = $('select[name="gallery_category_id"]').val();
            $.ajax({
                url: '{{ route('ajax.galleries') }}',
                data: {
                    gallery_category_id: gallery_category_id
                },
                success: function(res) {
                    console.log(res);
                    $('#galleryModalBody').empty();
                    $('#galleryModalBody').append(res);
                }
            })
        })

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1]
            record(page)
        })

        function record(page) {
            let gallery_category_id = $('select[name="gallery_category_id"]').val();
            $.ajax({
                url: "/ajax/galleries/paginate?page=" + page,
                data: {
                    gallery_category_id: gallery_category_id
                },
                success: function(res) {
                    console.log(res);
                    $('#galleryModalBody').empty();
                    $('#galleryModalBody').append(res);
                }
            })
        }
        // For open gallery Modal
        $(document).on('click', 'input[name="photo"]', function(e) {
            let thumbnailNumber = $('input[name="modalNumber"]').val();
        })

    </script>
@endprepend
