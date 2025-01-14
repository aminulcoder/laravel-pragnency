@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="User" pageoneRoute="{{ route('user.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header bg-white">
                <div class="p-6">

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-4">
                                <x-form.input name="name" type="text" label="Name" value="{{$user->name}}" />
                                <x-form.input name="first_name" type="text" label="First Name" value="{{$user->first_name}}" />
                                <x-form.input name="last_name" type="text" label="Last Name" value="{{$user->last_name}}" />
                                <x-form.input name="age" type="number" label="Age" value="{{$user->age}}" />
                                <x-form.input name="gender" label="gender" value="{{$user->gender}}"/>
                                <x-form.input name="photo" type="string" label="photo" value="{{$user->photo}}" />
                                <x-form.input name="social_photo" type="string" label="social_photo" value="{{$user->social_photo}}" />
                                <x-form.input name="child_number" type="number" label="child_number" value="{{$user->child_number}}" />
                                <x-form.input name="login_type" type="string" label="login_type" value="{{$user->login_type}}" />
                                <x-form.input name="user_type" type="string" label="user_type" value="{{$user->user_type}}" />

                            </div>


                            <div class="col-span-4">

                                <x-form.input name="edd_date" type="date" label="edd_date" value="{{$user->edd_date}}"/>
                                <x-form.input name="edd_calculation_type" type="text" label="edd_calculation_type" value="{{$user->edd_calculation_type}}" />
                                <x-form.input name="email" type="email" label="email" value="{{$user->email}}" />
                                <x-form.input name="language" type="text" label="language" value="{{$user->language}}"  />
                                <x-form.input name="pregnancy_loss" type="number" label="pregnancy_loss" value="{{$user->pregnancy_loss}}" />
                                <x-form.input name="pregnancy_loss_date" type="date" label="pregnancy_loss_date" value="{{$user->pregnancy_loss_date}}" />
                                <x-form.input name="baby_already_born" type="number" label="baby_already_born" value="{{$user->baby_already_born}}" />
                                <x-form.input name="bio_data" type="text" label="bio_data" value="{{$user->bio_data}}" />
                                <x-form.input name="country" type="text" label="country" value="{{$user->country}}"/>

                            </div>

                            <div class="col-span-4">

                                <x-form.input name="subscription" type="text" label="subscription" value="{{$user->subscription}}" />
                                <x-form.input name="is_profile_complete" type="number" label="is_profile_complete" value="{{$user->is_profile_complete}}" />
                                <x-form.input name="lmp_date" type="date" label="lmp_date" value="{{$user->lmp_date}}" />
                                <x-form.input name="deleted" type="number" label="deleted" value="{{$user->deleted}}"/>
                                <x-form.input name="deleted_date" type="date" label="deleted_date" value="{{$user->deleted_date}}"/>
                                <x-form.select-status />
                                <x-form.input name="email" label="Email" type="email" value="{{$user->email}}" />

                                <x-form.input name="password" label="Password" type="password" />
                                <x-form.input name="password_confirmation" label="Confirm Password" type="password" />
                            </div>

                            <x-form.submit-button name="Update" />
                    </form>
                </div>

            </div>
        @endsection
        @push('styles')
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
            </script>
        @endpush
