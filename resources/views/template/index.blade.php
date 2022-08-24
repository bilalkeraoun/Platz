<!DOCTYPE HTML>
<html>

<!-- HEAD -->
@include('template.partials._head', [])


<body>

	<a name="ancre"></a>

	<!-- CACHE -->
	<div class="cache"></div>

	<!-- HEADER -->
	@include('template.partials._header', [])

	<!-- NAVBAR -->
	@include('template.partials._navbar', [])


	<!-- FILTER -->
	@include('template.partials._filter', [])



		@yield('content')	
	
	    <!-- FOOTER -->
		@include('template.partials._footer', [])



	<!-- SCRIPT -->
	@include('template.partials._scripts', [])


</body>


</html>