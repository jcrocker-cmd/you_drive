@extends('main.layout.master')

@section('styles')
    @include('main.assets.style')
    <!-- @include('main.assets.bootstrapcss') -->

@section('content') 
    @include('main.layout.header')
    @include('main.components.login')
    @include('main.layout.footer2')
@endsection

@section('script')
    @include('main.assets.script')
