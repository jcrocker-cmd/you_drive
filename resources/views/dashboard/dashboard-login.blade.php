@extends('dashboard.layout.master')

@section('styles')
    @include('dashboard.assets.style')
@endsection

@section('content')
    @include('dashboard.components.dashboard-login-content')
@endsection

@section('scripts')
    @include('dashboard.assets.script')
@endsection