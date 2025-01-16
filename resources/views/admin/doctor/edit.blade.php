@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Doctor" pageoneRoute="{{route('doctor.index')}}" pagetwo="Edit"  />
@endsection
@section('content')

<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('doctor.update', $doctor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-12 gap-5 bg-white ">
                    <div class="col-span-12 lg:col-span-8 bg-white  p-4 rounded-lg">

                        <x-form.input label="Username" name="username" value="{{$doctor->username}}" />
                            <x-form.input label="First Name" name="first_name" value="{{$doctor->first_name}}" />
                            <x-form.input label="Last Name" name="last_name" value="{{$doctor->last_name}}"/>
                            <x-form.input label="Designation" name="designation" value="{{$doctor->designation}}"/>
                                <x-form.textarea label="Bio Data" name="bio_data"  value="{{$doctor->bio_data}}"/>
                            <x-form.input label="type"  name="type" value="{{$doctor->type}}"/>
                            <x-form.input label="email"  name="email"  value="{{$doctor->email}}"/>

                    </div>
                    <div class="col-span-12 lg:col-span-4 bg-white  p-4 rounded-lg">
                        <input class="dropify" type="file" id="myDropify" name="photo" value="{{$doctor->photo}}">
                    <x-form.select-status />
                    </div>

                </div>


            </div>

				<x-form.submit-button title="Update" />
		</form>
	</div>

</div>
@endsection
@push('style')
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
