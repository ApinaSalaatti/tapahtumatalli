Vue.http.headers.common['X-CSRF-TOKEN'] = $('#csrf-token').attr('value');

const app = new Vue({
    el: '#search-container',
	data: {
		searchString: '',
		searchUrl: '',
		results: [],
		// Service types
		serviceTypes: [{ value: 'venue', show: 'Paikka'}, { value: 'performer', show: 'Esiintyjä' }, { value: 'catering', show: 'Catering' }],
		serviceType: { value: '' },
		
		// Performer types
		performerTypes: [{ value: 'host', show: 'Juontaja'}, { value: 'karaoke', show: 'Karaoke-esilaulaja' }, { value: 'funnyman', show: 'Hauskuuttaja' }],
		performerType: { value: '' },
		
		// Event types
		eventTypes: [
			{ value: 'unsure', show: 'En ole varma...' },
			{ value: 'wedding', show: 'Häät' },
			{ value: 'meeting', show: 'Kokous/koulutus' },
			{ value: 'sauna', show: 'Saunailta' }
		],
		eventType: { value: 'unsure' },
		
		// Sorting
		sortBy: 'Arvosana'
	},
	
	watch: {
		
	},
	
	methods: {
		doSearch: function() {
			console.log(this.serviceType.value);
			console.log(this.performerType.value);
			console.log(this.eventType.value);
			console.log(this.searchString);
			
			console.log(this.serviceType.value);
			
			var params = {};
			if(this.performerType.value)
				params['performerType'] = this.performerType.value;
			if(this.eventType.value)
				params['eventType'] = this.eventType.value
			if(this.searchString)
				params['searchString'] = this.searchString
			
			// GET /someUrl
			this.$http.get(
				this.searchUrl + '/' + this.serviceType.value,
				{ params: params }
			).then((response) => {
				this.results = response.body;
			}, (response) => {
				console.log("ERRER");
				console.log(response);
			});
		}
	},
	
	ready: function() {
		
	}
});