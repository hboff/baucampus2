@php
$hauptort= $ort[ort]; 
$ostwert= $ort[laengengrad];
$nordwert = $ort[breitengrad];
$entfernung =array();

// entfernungsarray erstellen
foreach ($ort as $key => $val) { 
  $ost = $ostwert-$val[laengengrad];
  $nord = $nordwert-$val[breitengrad];
  $entfernung["$key"] = $ost*$ost+$nord*$nord;
  }
// nach etfernung sortieren
asort($entfernung);

$i = 0;
  foreach ($entfernung as $key => $val) { 
  $dateiort[] = $key;
  $linkort[] = $ort[$key][ort];
  if($ort[$key][2] != "___") $gutachter[]= $ort[$key][2];
}


for ($i = 0; $i < count(10); $i++ )   {
<a href="/{{$dateiort[$i]}}">Bausachverständiger in {{$linkort[$i]}}</a>";
<a href="/{{$hauptort}}">Bausachverständiger in $hauptort</a>";
}
@endphp