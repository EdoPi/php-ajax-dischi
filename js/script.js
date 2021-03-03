var app = new Vue({
    el: '#root',
    data: {
        discs: [],
        
    },
    methods: {
        

    },
    mounted() {
        const self = this;
        axios.get('https://flynn.boolean.careers/exercises/api/array/music')
            .then(function(resp) {
                console.log('discs ', resp);
                const disc = resp;
                self.discs = disc;
                
            });



    }
});

Vue.config.devtools = true;