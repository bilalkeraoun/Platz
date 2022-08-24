<div id="wrapper-navbar">
	<div class="navbar object">

		<div id="categories-filter">
			@include('categories._index', ["categories" => App\Models\Category::orderby("name","asc")->get()])    
		</div>
	</div>
</div>
