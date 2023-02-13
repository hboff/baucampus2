@isset ($nearestCities)
@php
$nearestCitiesArray = $nearestCities->toArray();
@endphp
{{@foreach ($nearestCitiesArray as $city)

<a href="/{{$city->city}}/bausachverstaendiger">Baugutachter {{$city->city}}</a>

@endforeach}}
@endisset

