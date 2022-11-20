@php
foreach ($ort as $orte) { 
    $cars = array($orte['ortschweiz'], $orte['ortschweiz'], $orte['ortschweiz'])
    $dateiort[] = $orte['ortschweiz'];
    $dateiort[] = $orte['ortschweiz'];
    $dateiort[] = $orte['ortschweiz'];


}
   
  foreach ($cars as $carss) { 
    echo $cars[0];
  }

@endphp

@foreach($ort as $orte)
{{$orte['ortschweiz']}}<br>
{{$orte['einwohner']}}<br>
{{$orte['laengengrad']}}<br>
{{$orte['breitengrad']}}<br>
@endforeach



@foreach($ort as $orte)

$haus = array ({{$orte['ortschweiz']}}, {{$orte['breitengrad']}});
<a href="/{{$orte->ortschweiz}}">Baugutachter {{$orte['ortschweiz']}}</a><br>
<a href="/{{$orte->ortschweiz}}">Baugutachter {{$orte['laengengrad'] + $orte['laengengrad'] * $orte['breitengrad'] + $orte['breitengrad']}}</a><br>
<a href="/{{$orte->ortschweiz}}">Baugutachter {{$orte['breitengrad']}}</a><br>
echo $haus[0]
@endforeach