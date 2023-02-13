@isset ($nearestCities)
@foreach ($nearestCities as $city)

<a href="/{{$city->city}}/bausachverstaendiger">Baugutachter {{$city->city}}</a>

@endforeach
@endisset

