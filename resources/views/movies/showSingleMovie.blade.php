@extends('layouts.app')

@section('content')

    <table id="movieslist">
        <h1>discover movies</h1>
        <thead>
        <tr>
            <th>id</th>
            <th>vote_count</th>
            <th>vote_average</th>
            <th>title</th>
            <th>tagline</th>
            <th>status</th>
            {{--spoken_languages--}}
            <th>runtime</th>
            <th>revenue</th>
            <th>release_date</th>
            {{--production_countries--}}
            {{--production_companies--}}
            <th>poster_path</th>
            <th>poster_path img</th>
            <th>popularity</th>
            <th>overview</th>
            <th>original_title</th>
            <th>original_language</th>
            <th>imdb_id</th>
            <th>homepage</th>
            <th>budget</th>
            <th>backdrop_path</th>
            <th>backdrop_path img</th>
            {{--<th>genres</th>--}}
            {{--belongs_to_collection--}}
        </tr>
        </thead>

        <tbody id="moviesoverviewlist">


        </tbody>
    </table>




@endsection

@push('afterscriptsstack')

    <script type="text/javascript">
        /*

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });


                var id = 12;
                var name = 'filipjsonsuccess';

                $.ajax({
                    type: 'POST',
                    url: '/ajaxRequest',
                    data: {id: id, name: name},
                    success: function (response) {
                        console.log(response.success);
                        //alert(response.success);

                    }
                });*/
    </script>


    <script type="">
        //https://developers.themoviedb.org/3/discover


        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://api.themoviedb.org/3/movie/120?language=en-US&api_key=feb28e437be8a3b0b90f44da4bc93644",
            "method": "GET",
            "headers": {},
            "data": "{}"
        };

        $.ajax(settings).done(function (response) {
            console.log(response);


            var trHtml2 = '';
            var value = response;

            trHtml2 += '<tr>';
            trHtml2 += '<td>' + value.id + '</td>';
            trHtml2 += '<td>' + value.vote_count + '</td>';
            trHtml2 += '<td>' + value.vote_average + '</td>';
            trHtml2 += '<td>' + value.title + '</td>';
            trHtml2 += '<td>' + value.tagline + '</td>';
            trHtml2 += '<td>' + value.status + '</td>';
            trHtml2 += '<td>' + value.runtime + '</td>';
            trHtml2 += '<td>' + value.revenue + '</td>';
            trHtml2 += '<td>' + value.release_date + '</td>';
            trHtml2 += '<td><a href="https://image.tmdb.org/t/p/w342/' + value.poster_path + '">' + value.poster_path + '</a></td>';
            trHtml2 += '<td><img src="https://image.tmdb.org/t/p/w342/' + value.poster_path + '"></td>';
            trHtml2 += '<td>' + value.popularity + '</td>';
            trHtml2 += '<td>' + value.overview + '</td>';
            trHtml2 += '<td>' + value.original_title + '</td>';
            trHtml2 += '<td>' + value.original_language + '</td>';
            trHtml2 += '<td><a href="http://www.imdb.com/title/' + value.imdb_id + '">' + value.imdb_id + '</a></td>';
            trHtml2 += '<td><a href="' + value.homepage + '">' + value.homepage + '</a></td>';
            trHtml2 += '<td>' + value.budget + '</td>';
            trHtml2 += '<td><a href="https://image.tmdb.org/t/p/w342/' + value.backdrop_path + '">' + value.backdrop_path + '</a></td>';
            trHtml2 += '<td><img src="https://image.tmdb.org/t/p/w342/' + value.backdrop_path + '"></td>';
            trHtml2 += '</tr>';
            $('#moviesoverviewlist').append(trHtml2);

            /*
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });
            */

            //Eerst de data ophalen en nadien naar de database saven
            $.ajax({
                type: 'POST',
                //url: '/ajaxRequest',
                url: '/movies',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: value.id, name: value.title},
                success: function (response) {
                    console.log(response.success);
                    alert(response.success);

                }
            });
        });


    </script>


@endpush