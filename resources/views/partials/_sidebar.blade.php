<header id="header">

<!-- ======= Header ======= -->
<div class="d-flex flex-column" id="sidebarprofile">
  <!-- ======= profile1 ======= -->
@foreach ($gutachter as $gutachters)
@if ($name == $gutachters['UrlName'])
  <div class="profile">
    <img src="/img/{{$gutachters['Photo']}}" alt="" class="mt-4" style="    vertical-align: middle;
width: 180px;
height: 180px;
border-radius: 50%;
object-fit: cover;
object-position: center;">

    <h1 class="text-light mb-3"><a href="/gutachter/{{$gutachters->LastName}}">{{$gutachters['FirstName']}} {{$gutachters['LastName']}}</a></h1>
    <p class="text-light text-center mb-0">{{$gutachters['Phone']}}</p>
    <p class="text-light text-center">{{$gutachters['Email']}}</p>
  </div>
@else
@endif
@endforeach
  <div class="profile">
    <img src="/img/logo.png" alt="" class="mt-2" style="    vertical-align: middle;
width: 180px;
height: 180px;
border-radius: 50%;
object-fit: cover;
object-position: center;">
    <h1 class="text-light mb-3"><a href="index.html">Hauptstelle Baucampus</a></h1>
    <p class="text-light text-center mb-0">Telefon: 05722 913800</p>
    <p class="text-light text-center">kontakt@baucampus.de</p>
  </div>
</div>
</header><!-- End Header -->