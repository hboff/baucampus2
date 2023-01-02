@php
$i=0;
@endphp
@foreach($ort as $orte)
@if ($i++ < 50)
<a href="/{{$orte->ortschweiz}}/bausachverstaendiger">Baugutachter {{$orte['ortschweiz']}}</a>
@else
@endif
@endforeach


