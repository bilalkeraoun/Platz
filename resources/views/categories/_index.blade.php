{{--
    ./resources/views/categories/_index.blade.php
    
--}}
@foreach($categories as $category)
{{--

                <a href="{{ route('categories.show', ['category'=>$category->id]) }}" 
                    id="bouton-ai">
                    <img src="{{asset('storage/'. $category->image)}}" alt="illustrator" title="Illustrator" height="28" width="28">
                </a>
--}}

    <div id="wrapper-bouton-icon">
        <div id="bouton-theme">
            <a style="cursor: pointer;" data-id="{{ $category->id }}">
                <img src="{{ asset('storage/'. $category->image) }}" alt="{{ $category->name }}" >
            </a>   
        </div>
    </div>
     
                      
             
  
@endforeach