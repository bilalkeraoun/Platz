 <div id="wrapper-navbar">
    <div class="navbar object">

        <div class="categories-filter">
            
            @include('categories._index', ["categories" => App\Models\Category::orderby("name","asc")->get()])    

        </div>


            <!-- 
                <div id="main-cross">
                	<div id="cross-menu"></div>
                </div>

                <div id="main-small-logo">
                	<div class="small-logo"></div>
                </div>

                <div id="main-premium-ressource">
                    <div class="premium-ressource"><a href="#">Premium resources</a></div>
                </div>

                <div id="main-themes">
                    <div class="themes"><a href="#">Latest themes</a></div>
                </div>

                <div id="main-psd">
                    <div class="psd"><a href="#">PSD goodies</a></div>
                </div>

                <div id="main-ai">
                    <div class="ai"><a href="#">Illustrator freebies</a></div>
                </div>

                <div id="main-font">
                    <div class="font"><a href="#">Free fonts</a></div>
                </div>

                <div id="main-photo">
                    <div class="photo"><a href="#">Free stock photos</a></div>
                </div>
            -->
        </div>
    </div>