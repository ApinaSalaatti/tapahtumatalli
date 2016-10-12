<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" id="csrf-token" value="{{ csrf_token() }}">

        <title>Tapahtumatalli</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,600" rel="stylesheet" type="text/css">
		<!-- Stylesheets -->
		{{ HTML::style('css/app.css') }}
		
		
	</head>
    <body>
		<header>
			<ul class="nav navbar-nav">
				<li class="navbar-logo">{{ HTML::link('/', 'TAPAHTUMATALLI') }}</li>
				<li>{{ HTML::link('/about', 'Info/UKK') }}</li>
				<li>{{ HTML::link('/profile', 'Profiilisivuesimerkki') }}</li>
				<!-- <li>{{ HTML::link('/venues', 'Tilat') }}</li> -->
				<li>{{ HTML::link('/search', 'Haku') }}</li>
			</ul>
		</header>
		
		<div id="site-container">
			@yield('content')
		</div>
		
		<footer>
			Tänne alas jotain? <br />
			Vaikka puhelinnumero: +358401234567<br />
			Email: mikko@mikko.com
		</footer>

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
		{{ HTML::script('js/app.js') }}
		
		@yield('additional_scripts')
    </body>
</html>
