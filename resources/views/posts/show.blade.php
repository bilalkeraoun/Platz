@extends('template.index')
@section('title')
    {{ $post->title }}
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">   
@endsection

<!-- 
    ./resources/views/posts/show.blade.php
    Description:liste des posts
--> 

@section('content')
<!-- PORTFOLIO -->
<div id="wrapper-container">
    <div class="container object">
        <div id="main-container-image">

            <div class="title-item">
                <div class="title-icon"><img src="{{ asset('storage/' .$post->category->image) }}" alt="" width="68" height="68"></div>
                <div class="title-text">{{ $post->title }}</div>
                <div class="title-text-2">{{$post->created_at->format('M d, Y') }}</div>
            </div>


            <div class="work">
                <figure class="white">
                         <img src="{{ asset('storage/'. $post->image)}}" alt="" />
                </figure>

            <!-- Description -->
                <div class="wrapper-text-description">
                    <div class="wrapper-file">
                        <div class="icon-file"><img src="{{ asset('storage/' .$post->category->image)}}" alt="" width="20" height="20"></div>
                        <div class="text-file"> {{ $post->category->name }} </div>
                    </div>

                    <div class="wrapper-weight">
                        <div class="icon-weight"><img src="{{ asset('assets/img/icon-weight.svg')}}" alt="" width="20" height="23" /></div>
                        <div class="text-weight">{{$post->size}} Mo</div>
                    </div>

                    <div class="wrapper-desc">
                        <div class="icon-desc"><img src="{{ asset('assets/img/icon-desc.svg')}}" alt="" width="24" height="24" /></div>
                        <div class="text-desc">{{$post->content}}</div>
                    </div>

                    <div class="wrapper-download">
                        <div class="icon-download"><img src="{{ asset('assets/img/icon-download.svg')}}" alt="" width="19" height="26" /></div>
                        <div class="text-download"><a href="#"><b>Download</b></a></div>
                    </div>

                    <!-- Same categories -->
                    <div class="wrapper-morefrom">
                        <div class="text-morefrom">More from .{{ $post->category->name }}</div>
                        <div class="image-morefrom">
                            @include('posts._index', ['posts' => \App\Models\Post::where('category_id',"=",$post->category_id)->inRandomOrder()->take(4)->get()])
                        </div>
                    </div>
                </div>





                
                <!-- Comments du posts -->
                <div class="post-reply">
                    <div id="title-post-send">
                        <hr/>
                        <h2>Your comments</h2>
                    </div>
                </div>
                {{-- Formfulaire d'ajout d'un commentaire --}}
                <div id="commentsShow">
                    @include('comments._index', ['comments'=> $post->comments])
                </div>

                <div class="post-send">
                    <div id="main-post-send">
                        <div id="title-post-send">Add your comment</div>
                        <form id="contact" method="get" action="{{ route('ajax.addComment') }}">
                
                                <input style="font-family: Helvetica, sans-serif;
                                -webkit-font-smoothing: antialiased;
                                  -moz-osx-font-smoothing: grayscale;
                                  font-size: 16px;
                                  margin-top: 10px;
                                  border-radius:solid 4px #999;
                                "type="text" id="pseudo" name="pseudo" placeholder="Votre Nom">
                            
                                <fieldset style="margin-top: 1rem; margin-left: -0.7rem;">
                            <fieldset>
                                <p><textarea id="commentContent" name="content" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
                            </fieldset>
                            <div style="text-align:center;"><input type="submit" name="send" value="Envoyer" /></div>
                            <input type="hidden" name="postID" id="postID" value="{{$post->id}}">
                          </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


<div id="wrapper-thank">
    <div class="thank">
        <div class="thank-text">bilal<span style="letter-spacing:-5px;">.ux</span>design</div>
    </div>
</div>




@endsection

@section('script')
<script src="{{ asset('assets/js/addComment.js')}}"></script>
@stop

    
