@extends('layout')

@section('head')
<title>Bausachverständiger {{$ortsname}}</title>
<meta name="Description" content="Bausachverständige in {{$ortsname}}">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

    <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>$ortsname</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
    foreach($regions as $region)
@if($region->Region == $ortsname)
    @foreach($ortat as $orte)
 
        @if ($orte->bundesland == $region->RegionShort)
            <a class="link-dark" href="/{{$orte->ort}}/bausachverstaendiger">Baugutachter {{$orte->ort}}</a><br>
       
        @endif
    @endforeach
@endif
@endforeach  
</div>
</div>

        <!-- END GRID -->
    </div><br>
    <br>
    <br>
@endsection
