<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .star-0 {color:#000000;}
    .star-1 {color:#555500;}
    .star-2 {color:#664400;}
    .star-3 {color:#882200;}
    .star-4 {	text-align:center;
	line-height:0.95em;
	font-weight:bold;
	color: transparent;
	background: repeating-linear-gradient(0deg, #B67B03 0.1em, #DAAF08 0.2em, #FEE9A0 0.3em, #DAAF08 0.4em, #B67B03 0.5em); 
	-webkit-background-clip: text;}
    .star-5 {	text-align:center;
	line-height:0.95em;
	font-weight:bold;
	color: transparent;
	background: linear-gradient( 45deg,
		#E60012 20%,
		#F39800 30%,
		#FFF100 40%,
		#009944 50%,
		#0068B7 60%,
		#1D2088 70%,
		#920783 80%);
	-webkit-background-clip: text;}
</style>
    <title>@yield('title')</title>

  </head>
  <body>
    @section('navbar')
    <nav class="navbar navbar-expand-xl sticky-top navbar-dark bg-dark mt-3 mb-3">
        <a class="navbar-brand" href=" {{route('top')}} ">Top</a>
        <a class="navbar-brand" href=" {{route('system')}} ">System</a>
        <a class="navbar-brand" href=" {{route('profile.index')}} ">Member</a>
        <a class="navbar-brand" href=" {{route('contact')}}">Contact</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav3">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </nav>
    @show
    <h1>@yield('title')</h1>
    <hr size="1">
    <div class="content">
      @yield('content')
    </div>
    <hr size="1">
    <div class="footer">
      
      @section('footer')
      copyright 2021 suzcho.
      @show
    </div>
  </body>
</html>
