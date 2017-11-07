<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created: function () {
            // Create the method you made below
            this.fetchData();
        },
        methods: {
            // fetch data from the API
            fetchData() {
                //axios.get(
                /*
                    axios({
                        method: 'get',
                        //url: this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc',
                        // headers: {'X-Requested-With': 'XMLHttpRequest'},
                    })*/
                //this.$http.get(this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc')
                this.$http.get('https://api.themoviedb.org/3/discover/movie?api_key=feb28e437be8a3b0b90f44da4bc93644&sort_by=popularity.desc')
                    .then(response => {
                        this.items = response.body;
                        this.loaded = false;
                    });
            }
        }
    }
</script>
