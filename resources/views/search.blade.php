@extends('layout')

@section('content')
	<div class="basic-page">
		<h1>Hae tapahtumapaikkoja ja tekijöitä</h1>
		
		<div id="search-container">
			<div class="form-group">
				<label for="search-service-type">Mitä olet etsimässä?</label>
				<select class="form-control" id="search-service-type" v-model="serviceType">
					<option v-for="type in serviceTypes" v-bind:value="type">@{{ type.show }}</option>
				</select>
			</div>
			
			<div v-if="serviceType">
				<div class="form-group" v-if="serviceType.value == 'performer'">
					<label for="search-performer-type">Millaista esiintyjää etsit</label>
					<select class="form-control" id="search-performer-type" v-model="performerType">
						<option v-for="type in performerTypes" v-bind:value="type">@{{ type.show }}</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="search-event-type">Tapahtuman luonne</label>
					<select class="form-control" id="search-event-type" v-model="eventType">
						<option v-for="type in eventTypes" v-bind:value="type">@{{ type.show }}</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="search-free-text">Hakusanat</label>
					<input class="form-control" id="search-free-text" v-model="searchString">
				</div>
				
				<button class="btn btn-primary" v-on:click="doSearch">Suorita haku</button>
			</div>
			
			<div id="search-results">
				<div id="search-result-header">
					<h2>Tulokset</h2>
					Järjestä:
					<select id="search-sort-by"  v-model="sortBy">
						<option>Arvosana</option>
						<option>Nimi</option>
					</select>
				</div>
				
				<div class="search-result" v-for="result in results">
					@{{ result.name }}
				</div>
			</div>
		</div>
	</div>
@stop

@section('additional_scripts')
	{{ HTML::script('js/search.js') }}
@stop