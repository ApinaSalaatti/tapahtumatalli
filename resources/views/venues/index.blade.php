@extends('layout')

@section('content')
	<div class="basic-page">
		<h1>Tilat</h1>
		
		@foreach($venues as $venue)
			<div>
				{{ HTML::link('/venues/'.$venue->id, $venue->name) }}
			</div>
		@endforeach
	</div>
@stop