@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Doctors" class="py-2" pageoneRoute="{{ route('doctor.create') }}" pagetwo="Create" />
@endsection




@section('content')
    <div class="flex flex-col gap-6  bg-white">
        <div class="card bg-white ">
            <div class="card-header bg-white">
                <div class="p-6">

                    <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 bg-white ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">

                                <x-form.input label="Username" name="username" />
                                <x-form.input label="First Name" name="first_name" />
                                <x-form.input label="Last Name" name="last_name" />
                                <x-form.input label="Designation" name="designation" />
                                <x-form.textarea label="Bio Data" name="bio_data" />
                                <x-form.input label="type"  name="type" />
                                <x-form.input label="email" type="email"  name="email" />

                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <input class="dropify" type="file" id="myDropify" name="photo">
                                <x-form.select-status />
                            </div>

                        </div>



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

