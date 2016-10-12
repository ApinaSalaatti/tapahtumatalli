@extends('layout')

@section('content')
	<div class="profile-page content">
		<div class="row">
			<img src="images/mikko.png" class="col-md-3 pull-left" />
			
			<div class="col-md-9">
				<div class="profile-basic-info row">
					<h1 class="profile-title">Mikko!</h1>
					<span class="profile-info">hauskuuttaja, karaoke-esilaulaja</span> | 
					<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
					( <a href="#">512 arvostelua</a> )
					<br />
					<div class="contact-info">Ota yhteyttä:
						<span class="glyphicon glyphicon-earphone"></span> +3580401231231
						<span class="glyphicon glyphicon-envelope"></span> mikko@hauskaa.com
					</div>
				</div>
				
				<div class="profile-text row">
					<p>
						Moikka vaan, oon Mikko ja teen sitä sun tätä. Osaan myös latinaa!
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus. Donec ultricies nisl ut felis, suspendisse potenti. Lorem ipsum ligula ut hendrerit mollis, ipsum erat vehicula risus, eu suscipit sem libero nec erat. Aliquam erat volutpat. Sed congue augue vitae neque. Nulla consectetuer porttitor pede. Fusce purus morbi tortor magna condimentum vel, placerat id blandit sit amet tortor.
					</p>
				</div>
				
				<div class="profile-images row">
					<img src="images/mikko.png" class="profile-thumb img-thumbnail" />
					<img src="images/mikko2.png" class="profile-thumb img-thumbnail" />
					<img src="images/mikko3.png" class="profile-thumb img-thumbnail" />
				</div>
				
				<div class="profile-prices row">
					<div class="col-md-12">
						<div class="row profile-prices-title">
							Esimerkkihintoja
						</div>
						<div class="row">
							<div class="col-md-2">Karaokehulluttelu</div>
							<div class="col-md-3">150 € / tunti</div>
						</div>
						<div class="row">
							<div class="col-md-2">Vitsinkerronta</div>
							<div class="col-md-3">10 € / vitsi (naurutakuu)</div>
						</div>
					</div>
				</div>
				
				<div class="profile-details row">
					<div class="col-md-3">
						<strong>Tapahtumatyypit:</strong><br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Elämys- / virkistystapahtuma<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Esitys- / näytöstapahtuma<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Häät<br />
						<span class="glyphicon glyphicon-remove" style="color: red;"></span> <span style="text-decoration:line-through;">Illallis- / lounastilaisuus</span><br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Juhlat<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Kokous / koulutus<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Messut<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Mökkireissu<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Saunailta<br />
						<span class="glyphicon glyphicon-ok" style="color: green;"></span> Seminaari / konferenssi
					</div>
					<div class="col-md-5">
						<strong>Lisäpalvelut:</strong><br />
						<span class="glyphicon glyphicon-hand-right"></span> Omat karaokelaitteet<br />
						<span class="glyphicon glyphicon-hand-right"></span> Hauskoja paitoja (satoja erilaisia)<br />
						<span class="glyphicon glyphicon-hand-right"></span> Vitsien teema tilaajan valittavissa<br />
					</div>
				</div>
			</div>
		</div>
	</div>
@stop