@switch($status)
@case('ch')
    @php
    $i=0;
    @endphp
    @foreach($ort as $orte)
    @if ($i++ < 50)
    <a href="/{{$orte->ortschweiz}}/bausachverstaendiger">Baugutachter {{$orte['ortschweiz']}}</a>
    @else
    @endif
    @endforeach
@break
 
@case('at')
    @php
    $i=0;
    @endphp
    @foreach($ortat as $orte)
    @if ($i++ < 50)
    <a href="/{{$orte->ort}}/bausachverstaendiger">Baugutachter {{$orte['ort']}}</a>
    @else
    @endif
    @endforeach
@break
 
@default

@endswitch


