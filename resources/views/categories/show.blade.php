{{--
    ./resources/views/categories/show.blade.php
    Variables disponible :
    $categorie
--}}
@extends('template.index')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">   
@endsection



@section('title')
    Free Grid {{ $category->name }}
@endsection

@section('content')
    <div id="wrapper-container">
      <div class="container object">
        <div id="main-container-image">
          <div id="list">
            <section class="work">
              <div class="more">

                @foreach($category->posts as $post)
                
                
                    <section class="work">
                        <figure class="white">
                            <a href="{{ route('posts.show', ['post'=>$post->id]) }}">
                                <img src="{{ asset('storage/'. $post->image) }}" alt="" />
                                <dl>
                                    <dt>{{$post->title}}</dt>
                                    <dd>{{$post->content}}</dd>
                                </dl>
                            </a>
                            <div id="wrapper-part-info">
                                <div class="part-info-image"><img src="{{ asset('storage/' .$post->category->image) }}" alt="" width="30" height="30" alt="" width="28" height="28" /></div>
                                <div id="part-info">{{$post->title}}</div>
                            </div>
                        </figure>
                    </section>


                @endforeach

              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
@endsection