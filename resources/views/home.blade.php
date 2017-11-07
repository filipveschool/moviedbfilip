@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table id="movieslist">
        <h1>discover movies</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>vote count</th>
            <th>vote average</th>
            <th>title</th>
            <th>popularity</th>
            <th>poster_path</th>
            <th>poster_path 2</th>
            <th>orig lang</th>
            <th>orig title</th>
            <th>backdrop_path</th>
            <th>backdrop_path 2</th>
            <th>overview</th>
            <th>release date</th>
            <th>genres</th>
        </tr>
        </thead>

        <tbody id="moviesoverviewlist">


        </tbody>
    </table>

@endsection

@section('afterscripts')

    <script type="">
        //https://developers.themoviedb.org/3/discover
        var settings = {
            "async": true,
            "crossDomain": true,
            //"url": "https://api.themoviedb.org/3/movie/120?language=en-US&api_key=feb28e437be8a3b0b90f44da4bc93644",
            "url": "https://api.themoviedb.org/3/discover/movie?page=1&include_video=false&include_adult=false&sort_by=popularity.desc&language=en-US&api_key=feb28e437be8a3b0b90f44da4bc93644",
            "method": "GET",
            "headers": {},
            "data": "{}"
        };

        $.ajax(settings).done(function (response) {
            console.log(response);

            var trHtml = '';

            $.each(response.results, function (index, value) {
                //console.log('index:' + index);
                //console.log('value:' + value);
                //console.log('value:' + value[title]);
                console.log('value:' + value.title);
                trHtml += '<li>' + value.title + '</li>';
            });

            $('#movieslist').append(trHtml);

            var trHtml2 = '';
            $.each(response.results, function (index, value) {

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
            });

            $('#moviesoverviewlist').append(trHtml2);
        });


    </script>

@endsection
