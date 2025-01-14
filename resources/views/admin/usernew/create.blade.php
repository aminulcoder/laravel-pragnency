@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Admin" pageoneRoute="{{ route('admin.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header ">
                <div class="p-6 bg-white">

                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-4">
                                <x-form.input name="name" type="text" label="Name" />
                                <x-form.input name="first_name" type="text" label="First Name" />
                                <x-form.input name="last_name" type="text" label="Last Name" />
                                <x-form.input name="name" type="text" type="text" label="Name" />
                                <x-form.input name="age" type="number" label="Age" />
                                <x-form.input name="gender" label="gender" />
                                <x-form.input name="photo" type="string" label="photo" />
                                <x-form.input name="social_photo" type="string" label="social_photo" />
                                <x-form.input name="child_number" type="number" label="child_number" />
                                <x-form.input name="login_type" type="string" label="login_type" />
                                <x-form.input name="user_type" type="string" label="user_type" />

                            </div>


                            <div class="col-span-4">

                                <x-form.input name="edd_date" type="date" label="edd_date" />
                                <x-form.input name="edd_calculation_type" type="text" label="edd_calculation_type" />
                                <x-form.input name="email" type="email" label="email" />
                                <x-form.input name="language" type="text" label="language" />
                                <x-form.input name="pregnancy_loss" type="number" label="pregnancy_loss" />
                                <x-form.input name="pregnancy_loss_date" type="date" label="pregnancy_loss_date" />
                                <x-form.input name="baby_already_born" type="number" label="baby_already_born" />
                                <x-form.input name="bio_data" type="text" label="bio_data" />
                                <x-form.input name="country" type="text" label="country" />

                            </div>

                            <div class="col-span-4">

                                <x-form.input name="subscription" type="text" label="subscription" />
                                <x-form.input name="is_profile_complete" type="number" label="is_profile_complete" />
                                <x-form.input name="lmp_date" type="date" label="lmp_date" />
                                <x-form.input name="deleted" type="number" label="deleted" />
                                <x-form.input name="deleted_date" type="date" label="deleted_date" />
                                <x-form.select-status />
                                <x-form.input name="email" label="Email" type="email" />

                                <x-form.input name="password" label="Password" type="password" />
                                <x-form.input name="password_confirmation" label="Confirm Password" type="password" />
                            </div>
                        </div>




                </div>


                <x-form.submit-button />

                </form>
            </div>

        </div>
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
