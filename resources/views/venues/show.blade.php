@extends('layout')

@section('content')
	<div class="basic-page">
		<h1>{{ $venue->name }}</h1>
		
		@foreach($venue->eventtypes as $e)
			{{ $e->name }} <br />
		@endforeach
		
	</div>
@stop