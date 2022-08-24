<!-- 
    ./resources/views/posts/index.blade.php
    Description:liste des posts
--> 
@extends('template.index')

@section('title')
    Free Grid Themes
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
<div id="wrapper-container">

    <!-- Liste des postes -->
    <div class="container object">
        <div id="main-container-image">
            @include('posts._list', ['posts'=>$posts])
        </div>
    </div>

    
    <div id="more">
        <div id="wrapper-oldnew">
            <div class="oldnew">
                <div class="wrapper-oldnew-prev">
                    <div id="oldnew-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bilal<span style="letter-spacing:-5px;">ux</span>design</div>
        </div>
    </div>

@endsection


<!-- Javascript -->
@section('script')
    <script src="{{ asset('assets/js/more.js') }}"></script>
    <script src="{{ asset('assets/js/ajaxCategory.js') }}"></script>
@stop
