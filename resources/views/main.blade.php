<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap -->
	    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
	    <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
        <script>var wowhead_tooltips = {"colorlinks": false, "iconizelinks": false, "renamelinks": false, "hide": { "extra": true}};</script>
	</head>
	<body>
		<header>
			<h1>Parallel Guild<small>EU Silvermoon</small></h1>
		</header>
		<nav>
			<ul>
				<li><a href="{{url('/progress')}}">Progress</a></li>
				<li><a href="{{url('/news')}}">News</a></li>
				<li><a href="{{url('/media')}}">Media</a></li>
				<li><a href="{{url('/applications/create')}}">Apply</a></li>
				<li><a href="{{url('/applications')}}">Applications</a></li>
				<li><a href="{{url('/audit')}}">Guild Audit</a></li>
				<li><a href="http://www.parallelguild.com/forum">Forum</a></li>
				<li><a href="https://www.warcraftlogs.com/guilds/16639">Logs</a></li>
			</ul>
		</nav>
		<div class="container" style="border:1px solid black">
			@yield('content')
		</div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="{{url('/js/app.js')}}"></script>
	    <!--<script src="js/bootstrap.min.js"></script>-->
	</body>
</html>
