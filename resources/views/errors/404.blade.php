@extends('main.layout.master')

@section('styles')
    @include('main.assets.style')
    @include('main.assets.bootstrapcss')

<section>
    <div class="error">
        <h1>4<span><img src="images/tire.png" class="tire-error"></span>4</h1>
        <p>NOT FOUND</p>

    </div>
</section>
@endsection

@section('script')
    @include('main.assets.script')