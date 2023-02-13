@isset($ortsname)
@isset ($nearestCities)
@foreach ($nearestCities as $city)
@if( $ortsname == $city->ort)
@else
<a href="/{{$city->ort}}/bausachverstaendiger">Baugutachter {{$city->ort}}</a>
@endif
@endforeach
@endisset
@endisset
