<!DOCTYPE html>
<html lang="en">

<head>  
    @include('includes.head')
</head>
<body>
    <div class="container" style="max-width: 1000px; margin: 0 auto;">
    	<header class="row">
    		@include('includes.header')
    	</header>
    	<div id="main" class="row" style="display: flex; justify-content: center; background-color: lightgreen">
    		@yield('content')
    	</div>
    	<footer class="row">
    		@include('includes.footer')
    	</footer>	
    </div>
</body>

</html>