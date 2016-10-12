Vue.http.headers.common['X-CSRF-TOKEN'] = $('#csrf-token').attr('value');

const app = new Vue({
    el: '#search-container',
	data: {
		searchString: '',
		
		// Service types
		serviceTypes: [{ value: 'venue', show: 'Paikka'}, { value: 'performer', show: 'Esiintyjä' }, { value: 'catering', show: 'Catering' }],
		serviceType: '',
		
		// Performer types
		performerTypes: [{ value: 'host', show: 'Juontaja'}, { value: 'karaoke', show: 'Karaoke-esilaulaja' }, { value: 'funnyman', show: 'Hauskuuttaja' }],
		performerType: '',
		
		// Event types
		eventTypes: [
			{ value: 'unsure', show: 'En ole varma...' },
			{ value: 'wedding', show: 'Häät' },
			{ value: 'meeting', show: 'Kokous/koulutus' },
			{ value: 'sauna', show: 'Saunailta' }
		],
		eventType: 'unsure',
		
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
		}
	},
	
	ready: function() {
		
	}
});