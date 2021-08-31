Vue.config.devtools = true;

new Vue (
    {
        el: '#app',

        data: {
            records: []
        },

        created() {

            axios.get('http://localhost/Esercizi/30-08%20(PHP%20+%20Vue)/php-ajax-dischi/api/api.php').then((reply) => {
                this.records = reply.data
            })
        },
    }
)