@extends('layouts.app')

@section('content')

    <div id="content_hero" class="center-content hero-ontop header content-hero"
         style="background-image: url({{$background}});">
        {{--style="background-image: url({{$background}}); background-position: 50% 50%; background-size: cover; background-repeat: no-repeat;--}}
        {{--filter: opacity(100) grayscale(100%) contrast(130%);">--}}
        <img src="https://www.klevermedia.co.uk/html_templates/movie_star_html/images/scroll-arrow.svg"
             alt="Scroll down" class="scroll">
        <div class="custom_bg">
            <div class="container">
                <div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0"
                     data-translatey="100">
                    <div class="col-md-4 col-sm-12">
                        <div class="movie-img">
                            <img src="{{$poster}}">
                            <div class="buttons">
                                <!--         <span class="certificate">PG</span>-->
                                <a href="https://youtu.be/RhFMIRuHAL4" data-vbtype="video"
                                   class="venobox btn btn-default vbox-item mb-20">
                                    <i class="material-icons">play_arrow</i>
                                    <span>Play trailer</span>
                                </a>
                                <button class="btn btn-default">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    Add to favorite
                                </button>
                            </div>
                            <!-- end buttons -->
                        </div>
                        <!-- end movie-img -->
                    </div>
                    <!-- end image col -->

                    <div class="col-md-8 col-sm-12">
                        <span class="title">Action, Adventure, Sci-Fi</span>
                        <h1>{{ $movie->title}}</h1>
                        <span class="release_date">({{dateFormatToYearOnly($movie->release_date)}})</span>
                        <ul class="auto actions scores">
                            <li class="tmdb">TMDB score: {{$movie->tmdb_rating}}</li>
                            <li class="runtime">Runtime : {{$movie->runtime}} minuten</li>
                            <li><a href="http://www.imdb.com/title/{{$movie->imdb_id}}">IMDB link to profile</a></li>
                        </ul>

                        <div class="header_info">
                            <h3>Omschrijving</h3>
                            <div class="overview">
                                <p>
                                    {{$movie->overview}}
                                </p>
                            </div>
                            <h3 class="crew">
                                Uitgelichte crew
                            </h3>
                            <ol class="people no_image">


                                <li class="profile">
                                    <p><a href="/person/108-peter-jackson">Peter Jackson</a></p>
                                    <p class="character">Director, Screenplay</p>
                                </li>

                                <li class="profile">
                                    <p><a href="/person/128-philippa-boyens">Philippa Boyens</a></p>
                                    <p class="character">Screenplay</p>
                                </li>

                                <li class="profile">
                                    <p><a href="/person/126-fran-walsh">Fran Walsh</a></p>
                                    <p class="character">Screenplay</p>
                                </li>

                                <li class="profile">
                                    <p><a href="/person/129-j-r-r-tolkien">J.R.R. Tolkien</a></p>
                                    <p class="character">Novel</p>
                                </li>


                                <li class="profile"></li>
                                <li class="profile"></li>
                                <li class="profile"></li>


                            </ol>

                            <h3 class="facts">Feiten</h3>
                            <ul class="facts-list">
                                <li><span class="heading">Status:</span> {{$movie->status}}</li>
                                <li><span class="heading">Originele taal:</span> {{$movie->original_language}}</li>
                                <li><span class="heading">Duur:</span>{{$movie->runtime}} minuten</li>
                                <li><span class="heading">Verschijningsinformatie:</span>
                                    {{Date::parse($movie->release_date)->format('j F Y')
                                }}
                                </li>
                                <li><span class="heading">Budget:</span> ${{$movie->budget}}</li>
                                <li><span class="heading">Opbrengst:</span> ${{$movie->revenue}}</li>
                                <li><span class="heading">Website:</span> <a target="_blank"
                                                                             href="{{$movie->homepageurl}}">http://www.lordoftherings.net/</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col-md-8-->
                </div>
            </div>
        </div>
    </div>

    <div class="container actors-overview">
        <div class="row">
            <ul class="actors-list">
                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>

                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>
                <li class="card actor">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w138_and_h175_bestv2/c4fB3WAS7jN78rihw2kB81v6sez.jpg"
                             class>
                    </a>
                    <p class="actor-name">Elijah Wood</p>
                    <p class="character">Frodo Baggins</p>
                </li>
            </ul>
        </div> <!-- row -->
    </div>


@endsection