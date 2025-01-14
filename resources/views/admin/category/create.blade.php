@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" class="py-2" pageoneRoute="{{ route('category.index') }}" pagetwo="Create" />
@endsection




@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Category Name" name="name" />

                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">
                            </div>

                        </div>


                        {{-- @include('admin.inc.modal.photo-gallery') --}}
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        @endsection

        @push('styles')
            <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
                rel="stylesheet">
            <link rel="stylesheet" type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
            <style>
                .dropify-message p {
                    font-size: 24px
                }
            </style>
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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

                });
            </script>


        @endpush
