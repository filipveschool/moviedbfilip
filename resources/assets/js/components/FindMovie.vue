<template>
    <div v-show="loaded" class="loader">
        <ul>
            <li v-for="item in items.results">
                <img :src="imageUrl + item.poster_path" alt="">
                <section>
                    <h3>{{item.original_title}}</h3>
                    <p>{{ item.overview }}</p>
                </section>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                items: [],
                baseUrl: 'https://api.themoviedb.org/3',
                //baseUrl: 'https://theimdbapi.org/api/',
                apiKey: 'feb28e437be8a3b0b90f44da4bc93644',
                imageUrl: 'https://image.tmdb.org/t/p/w342',
                loaded: true,
            }
        },
        created: function () {
            // Create the method you made below
            this.fetchData();
        },
        methods: {
            // fetch data from the API
            fetchData() {
                //axios.get(

                axios({
                    method: 'get',
                    url: this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc',
                    //responseType: 'json',
                    //responseType: 'jsonp',
                    //headers: {'X-Requested-With': 'XMLHttpRequest'},
                    headers: {'Content-Type': 'application/json'},
                })
                //this.$http.get(this.baseUrl + '/discover/movie?api_key=' + this.apiKey + '&sort_by=popularity.desc')
                //this.$http.get('https://api.themoviedb.org/3/movie/550?api_key=feb28e437be8a3b0b90f44da4bc93644&callback=test')
                    .then(response => {
                        console.log(response.body);
                        //this.items = response.body;
                        //this.loaded = false;
                    });
            }
        }
    }
</script>

<style>
    ul li {
        display: inline-block;
        vertical-align: top;
        width: 25vw;
        position: relative;
        overflow: hidden;
        background: black;
    }

    ul li:hover section {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    ul li:hover img {
        -webkit-transform: scale(0.9);
        transform: scale(0.9);
    }

    ul li img {
        width: 100%;
        height: auto;
        display: block;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: -webkit-transform 350ms ease-in-out;
        transition: -webkit-transform 350ms ease-in-out;
        transition: transform 350ms ease-in-out;
        transition: transform 350ms ease-in-out, -webkit-transform 350ms ease-in-out;
    }

    section {
        position: absolute;
        bottom: 0;
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        overflow: hidden;
        height: 100%;
        width: 100%;
        overflow-y: scroll;
        opacity: 0;
        -webkit-transform: translate3d(0, 10%, 0);
        transform: translate3d(0, 10%, 0);
        -webkit-transition: opacity 350ms ease-in-out 150ms, -webkit-transform 350ms ease-in-out 150ms;
        transition: opacity 350ms ease-in-out 150ms, -webkit-transform 350ms ease-in-out 150ms;
        transition: opacity 350ms ease-in-out 150ms, transform 350ms ease-in-out 150ms;
        transition: opacity 350ms ease-in-out 150ms, transform 350ms ease-in-out 150ms, -webkit-transform 350ms ease-in-out 150ms;
    }

    section h3 {
        margin-bottom: 10px;
        font-size: 18px;
    }

    section p {
        line-height: 1.4;
        font-size: 15px;
    }

    /*

        .loader {
            position: fixed;
            z-index: 100000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #FFF;
        }
        .loader:after {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            width: 20px;
            height: 20px;
            border-top: 2px solid black;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-left: 2px solid white;
            content: "";
            border-radius: 100px;
            -webkit-animation: spin 300ms linear infinite;
            animation: spin 300ms linear infinite;
        }
        @-webkit-keyframes spin {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spin {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    */

</style>