<?php

use Jenssegers\Date\Date;

function dateFormatToYearOnly($date)
{
    return Date::parse($date)->format('Y');
}

function dateFormatToYearMonthDayFormat($date)
{
    Date::parse($date)->format('Y-m-d');
}

function tmdbImageUrl($image)
{
    return 'https://image.tmdb.org/t/p/original/' . $image;
}

// TMBD helpers

function getPopularTvShows()
{


}

function makeImdbLinkMedia($imdbnr)
{
    return 'http://www.imdb.com/title/' . $imdbnr;
}

function makeImdbLinkProfile($imdbnr)
{
    return 'http://www.imdb.com/name/' . $imdbnr;
}

