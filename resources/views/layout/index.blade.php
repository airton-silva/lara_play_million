<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>show do milhão mjailton</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script> 
	<script type="text/javascript" src="{{asset('assets/js/js.js')}}"></script> 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="site">

    @include('header.header')
    @yield('content')
    @include('footer.footer')	
</div>
</body>
</html>