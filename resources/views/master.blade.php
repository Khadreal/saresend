<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" name="author" content="Opeyemi Ibrahim">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="quickly, quick, send, mail, email, sender, free, receive, reply, client"/>
    <meta name="description" content="Send an email when you have no access to your regular email account. Send an email and receive reply in your inbox. Send email on the go without loggin in to your email client"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

</head>
<body>
	<header class="col-xs-12">
		<div class="logo pull-left">
			Saresend
		</div>
		<a href="#">Blog</a>
	</header>
	@yield('content')

	<script src="//cdn.ckeditor.com/4.7.0/basic/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'message' );
	</script>
</body>
</html>