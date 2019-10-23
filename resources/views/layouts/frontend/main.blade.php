<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the description -->
	<meta name="description" content="Harrison Locks">
	<!-- set the Keyword -->
	<meta name="keywords" content>
	<meta name="author" content="Harrison Locks">
	<!-- include poppins google font cdn link -->
	<link href="{{ asset('css/css.css') }}" rel="stylesheet">
	<!-- set the page title -->
	<title>Harrison Locks</title>
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<style>
		.navbar-toggler:not(:disabled):not(.disabled){
			margin-top:30px;
		}
	</style>
	<link rel="icon" href="favicon.jpg" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon"/>
	<!-- include the site Fontsicon stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/fontsicon.css') }}">
	<!-- include the site Plugins stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/colors.css') }}">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<style>
	.dharmendra{
		position: fixed;
		bottom:-10px;
		right:20px;
		z-index: 5000;
		width: 160px;

	}
	.dharmendra:hover{
		opacity: 0.4;
	}

	.ftAddress{
		margin-top:40px;
	}

	@media only screen and (max-width: 600px) {
		
		.dharmendra{
			width: 120px;
			height: auto;		
		}
	}

	.pageMainNavigation.navbar-nav.pageMainNavigation02 .nav-link, .mainNavDropdown.dropdown-menu .dropdown-item{
		font-size:11px;
	}
	.loginLinksList.loginLinksList02{
		padding:0px
	}
	</style>
	@yield('head')
	<!-- include jQuery library -->
	<script src="{{asset('js/jquery-3.3.1.min.js') }} "></script>
	<script src="{{asset('bootstrap.min.js') }} "></script>
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageHeader -->
        @include('layouts.frontend.header')
        
        @yield('content')
		
        <!-- pageFooter -->
        @include('layouts.frontend.footer')
		<div class="dharmendra">
			<img src="{{asset('images/dharmendra_2.png') }}" alt="Dharmendra Brand Ambasador Harrison Lock" />	
		</div>	
		
	</div>
	<!-- include Plugins JavaScript -->
	<script src="{{asset('js/plugins.js') }}"></script>
	<!-- include custom JavaScript -->
	<script src="{{asset('js/jquery.main.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=650492478678159&autoLogAppEvents=1"></script>
	@yield('script')
</body>
</html>