@isset ($nearestCities)
@foreach ($nearestCities as $city)

<a href="/{{$city->ort}}/bausachverstaendiger">Baugutachter {{$city->ort}}</a>

@endforeach
@endisset

