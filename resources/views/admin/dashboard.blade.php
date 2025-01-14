

@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb />
@endsection
@section('content')
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-2 md:gap-6">
        <a href="#">
            <x-dashboard.dahsbordcard title="Portfilios" data="123" />
        </a>
        <a href="#">
            <x-dashboard.dahsbordcard title="Services" data="123" />
        </a>
        <a href="#">
            <x-dashboard.dahsbordcard title="Reviews" data="123" />
        </a>
    </div>
@endsection
