@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="col-sm-12">
            <h2 class="heading-home" style="background:#fff; text-transform: uppercase; padding: 15px; font-family: Bitter,serif;
font-size: 19px; margin: 0 15px 20px; color: #3E424D;">
                <i class="fa fa-fire"></i> New and Upcoming </h2>


            <figure class="col-lg-2 col-md-3 col-sm-4 pretty-figure">
                <img src="#" id="poster">

                <figcaption class="no-rating">
                    <a href="" id="filmlink">

                    </a>
                </figcaption>
            </figure>
        </div>

    </div>

@endsection

@section('afterscripts')

    <script type="">
        //https://developers.themoviedb.org/3/discover
        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://api.themoviedb.org/3/movie/120?language=en-US&api_key=feb28e437be8a3b0b90f44da4bc93644",
            "url": "https://api.themoviedb.org/3/movie/upcoming?page=1&language=nl_BE&api_key=feb28e437be8a3b0b90f44da4bc93644",
            "method": "GET",
            "headers": {},
            "data": "{}"
        };

        $.ajax(settings).done(function (response) {
            console.log(response);

            var trHtml2 = '';
            $.each(response.results, function (index, value) {

                $('#poster').attr("src", "https://image.tmdb.org/t/p/original" + value.poster_path);
                /*
                                trHtml2 += '<tr>';
                                trHtml2 += '<td>' + value.id + '</td>';
                                trHtml2 += '<td>' + value.vote_count + '</td>';
                                trHtml2 += '<td>' + value.vote_average + '</td>';
                                trHtml2 += '<td>' + value.title + '</td>';
                                trHtml2 += '<td>' + value.popularity + '</td>';
                                trHtml2 += '<td><a href="https://image.tmdb.org/t/p/w342/' + value.poster_path + '">' + value.poster_path + '</a></td>';
                                trHtml2 += '<td><img src="https://image.tmdb.org/t/p/w342/' + value.poster_path + '"></td>';
                                trHtml2 += '<td>' + value.original_language + '</td>';
                                trHtml2 += '<td>' + value.original_title + '</td>';
                                trHtml2 += '<td><a href="https://image.tmdb.org/t/p/w342/' + value.backdrop_path + '">' + value.backdrop_path + '</a></td>';
                                trHtml2 += '<td><img src="https://image.tmdb.org/t/p/w342/' + value.backdrop_path + '"></td>';
                                trHtml2 += '<td>' + value.overview + '</td>';
                                trHtml2 += '<td>' + value.release_date + '</td>';
                                trHtml2 += '</tr>';
                                */
            });

            $('#moviesoverviewlist').append(trHtml2);
        });


    </script>

@endsection
