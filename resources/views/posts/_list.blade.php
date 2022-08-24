<!--
    ./resources/views/posts/_list.blade.php
    Variables disponible :
    $posts
-->

@foreach($posts as $post)
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
                <div class="part-info-image"><img src="{{ asset('storage/' .$post->category->image) }}" alt="" width="28" height="28" /></div>
                <div id="part-info">{{$post->title}}</div>
            </div>
        </figure>


    </section>
@endforeach



