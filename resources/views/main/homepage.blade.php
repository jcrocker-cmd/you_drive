@extends('main.layout.master')

@section('styles')
    @include('main.assets.style')
    @include('main.assets.bootstrapcss')

@section('content') 
    @include('main.layout.header')
    @include('main.components.homepage-content')
    @include('main.components.howitworks-content')
    @include('main.components.contactus-content')
    @include('main.layout.footer')
@section('script')
    @include('main.assets.script')
    @include('main.assets.bootstrapjs')
@endsection
