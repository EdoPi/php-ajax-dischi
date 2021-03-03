var app = new Vue({
    el: '#root',
    data: {
        discs: [],
        
    },
    methods: {
        

    },
    mounted() {
        const self = this;
        axios.get('http://localhost:8888/php-ajax-dischi/app/server.php')
            .then(function(resp) {
                console.log('discs ', resp.data);
                const disc = resp.data;
                self.discs = disc;                
            });



    }
});

Vue.config.devtools = true;