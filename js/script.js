var app = new Vue({
    el: '#root',
    data: {
        discs: [],
        arrayGenre: [],
        selectGenre:'',
        errorFlag: false,
        
    },
    methods: {

        listForGenre: function() {
            this.discs.forEach(element => {
                if (!this.arrayGenre.includes(element.genre)) {
                    this.arrayGenre.push(element.genre);
                }
            });
        },
        
        filterForGenre: function(){
            const self = this;
            if (self.selectGenre === 'all') {
                axios.get('http://localhost:8888/php-ajax-dischi/app/server.php')
                .then(function(resp) {
                    console.log('discs ', resp.data);
                    const disc = resp.data;
                    self.discs = disc;               
                });  
            } else {
                axios.get('http://localhost:8888/php-ajax-dischi/app/server.php?genre=' + self.selectGenre )
                .then(function(resp) {
                    console.log('discs ', resp.data);
                    const disc = resp.data;
                    self.discs = disc;               
                }).catch(function(error){
                    self.errorFlag = true;
                });
            }
        },

    },
    mounted() {
        const self = this;
        axios.get('http://localhost:8888/php-ajax-dischi/app/server.php')
            .then(function(resp) {
                console.log('discs ', resp.data);
                const disc = resp.data;
                self.discs = disc;
                self.listForGenre();                
            });



    }
});

Vue.config.devtools = true;