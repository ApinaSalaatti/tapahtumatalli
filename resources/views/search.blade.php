@extends('layout')

@section('content')
	<div class="basic-page">
		<h1>Hae tapahtumapaikkoja ja tekijöitä</h1>
		
		<div class="container" id="search-container">
			<input type="hidden" value="{{ url('/api/search') }}" v-model="searchUrl" />
			<div class="row">
				<div class="col-md-6">
		
					<div>
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
					</div>
				</div>
			
				<div class="col-md-6">
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
							<img v-bind:src="result.img" style="width:100px;height100px;float:left;" />
							@{{ result.name }}
							<br/>
							<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
							( <a href="#">@{{ result.ratings }} arvostelua</a> )
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('additional_scripts')
	{{ HTML::script('js/search.js') }}
@stop