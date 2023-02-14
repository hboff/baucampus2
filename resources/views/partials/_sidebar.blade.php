
<header id="header">

<!-- ======= Header ======= -->
<div class="d-flex flex-column" id="sidebarprofile">
  <!-- ======= profile1 ======= -->
@isset($ortsname)
@isset($expert)
@foreach ($expert as $row)
@if ($ortsname == $row->ort)
  <div class="profile">
    <img src="/img/{{$row->Photo}}" alt="" class="mt-4" style="    vertical-align: middle;
width: 180px;
height: 180px;
border-radius: 50%;
object-fit: cover;
object-position: center;">

    <h1 class="text-light mb-3"><a href="/gutachter/{{$row->LastName}}">{{$row->FirstName}} {{$row->LastName}}</a></h1>
    <p class="text-light text-center mb-0">{{$row->Phone}}</p>
    <p class="text-light text-center">{{$row->Email}}</p>
  </div>
@else
<div class='mt-5 pt-5'></div>
@endif
@endforeach
@endisset
@endisset

  <div class="profile">
    <img src="/img/logo.png" alt="" class="mt-2" style="    vertical-align: middle;
width: 120px;
height: 120px;
border-style:none;
object-fit: cover;
object-position: center;">
    <h1 class="text-light mb-3"><a href="index.html">Hauptstelle Baucampus</a></h1>
    <p class="text-light text-center mb-0">Telefon: 05722 913800</p>
    <p class="text-light text-center">kontakt@baucampus.de</p>
  </div>
</div>
</header><!-- End Header -->
