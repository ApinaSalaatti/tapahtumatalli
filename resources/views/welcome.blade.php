@extends('layout')

@section('content')
	<div id="frontpage-banner" class="flex-center">
		<div>
			<div class="flex-center">
				<h1>Tapahtumatalli</h1>
			</div>
			<form class="form-inline frontpage-banner-form">
			  <div class="form-group">
				<label for="typeOfEvent" class="sr-only">Tapahtuman tyyppi</label>
				<select class="form-control front-banner-type-of-event" id="typeOfEvent">
				  <option>Millaista tapahtumaa olet järjestämässä?</option>
				  <option>Synttärit</option>
				  <option>Häät</option>
				  <option>Kekkerit</option>
				  <option>Muu</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="city" class="sr-only">Kaupunki</label>
				<input type="text" class="form-control frontpage-banner-city" id="city" placeholder="Kaupunki">
			  </div>
			  <button type="submit" class="btn frontpage-banner-btn">Etsi</button>
			</form>
		</div>
	</div>
	
	<div class="frontpage-content">
		<h1 class="flex-center">Tähän sit jotain muuta sisältöä?</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus. Donec ultricies nisl ut felis, suspendisse potenti. Lorem ipsum ligula ut hendrerit mollis, ipsum erat vehicula risus, eu suscipit sem libero nec erat. Aliquam erat volutpat. Sed congue augue vitae neque. Nulla consectetuer porttitor pede. Fusce purus morbi tortor magna condimentum vel, placerat id blandit sit amet tortor.
		</p>
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2 class="flex-center">Tietoa</h2>
					Tässäpä tärkeää tietoa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien.
				</div>
				<div class="col-md-4">
					<h2 class="flex-center">Tietoa</h2>
					Tässäpä tärkeää tietoa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien.
				</div>
				<div class="col-md-4">
					<h2 class="flex-center">Tietoa</h2>
					Tässäpä tärkeää tietoa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien.
				</div>
			</div>
		</div>
	</div>
@stop