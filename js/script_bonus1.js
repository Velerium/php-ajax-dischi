Vue.config.devtools = true;

new Vue (
    {
        el: '#app',

        data: {
            records: [],
            selectedGenre: 'All',
        },

        methods: {
            filter() {
                axios.get(`http://localhost/Esercizi/30-08%20(PHP%20+%20Vue)/php-ajax-dischi/api/api_bonus.php/?genre=${this.selectedGenre}`).then((reply) => {
                this.records = reply.data
            })
            }
        },

        created() {

            axios.get(`http://localhost/Esercizi/30-08%20(PHP%20+%20Vue)/php-ajax-dischi/api/api_bonus.php/?genre=All`).then((reply) => {
                this.records = reply.data
            })
        },
    }
)