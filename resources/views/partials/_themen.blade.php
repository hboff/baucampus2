@php
$x[]=$ort['ort'];
$y[]=$ort['laengengrad'];
$z[]=$ort['breitengrad'];

$hauptort= $ort['ort'][0]; 
$ostwert= $y['laengengrad'][0];
$nordwert = $ort['breitengrad'][3];
$i=0;
@endphp

@foreach($ort as $key => $val)
  $ost = $ostwert-$val[2];
  $nord = $nordwert-$val[3];
  $entfernung["$key"] = $ost*$ost+$nord*$nord;
@endforeach
@asort($entfernung)
@section('ortsname')
@foreach($ort as $orte)
@if ($i++ > 10)
@else
{{$y[0]}} {{$z}}
@endif
@endforeach
@endsection
