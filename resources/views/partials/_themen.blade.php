
@section('ortsname')
@php
$i=0;
@endphp
@foreach($ort as $orte)
@if ($i++ > 50)
@else
<a href="/{{$orte->ort}}">Baugutachter {{$orte['ort']}}</a><br>
@endif
@endforeach
@endsection

