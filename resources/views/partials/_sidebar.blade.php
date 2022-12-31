<header id="header">

<!-- ======= Header ======= -->
<div class="d-flex flex-column" id="sidebarprofile">
  <!-- ======= profile1 ======= -->

  <div class="profile">
    <img src="/img/profile.jpg" alt="" class="mt-4" style="    vertical-align: middle;
width: 180px;
height: 180px;
border-radius: 50%;
object-fit: cover;
object-position: center;">
@foreach ($gutachter as $gutachters)
@php
$id=$gutachters['ID']
@endphp
@if($id==8)
    <h1 class="text-light mb-3"><a href="/gutachter/{{$gutachters->LastName}}">{{$gutachters['FirstName']}} {{$gutachters['LastName']}}</a></h1>
@else
@endif
@endforeach
    <p class="text-light text-center mb-0">Telefon: 0176 56908588</p>
    <p class="text-light text-center">koessling@baucampus.de</p>
  </div>
  <div class="profile">
    <img src="/img/profile.jpg" alt="" class="mt-2" style="    vertical-align: middle;
width: 180px;
height: 180px;
border-radius: 50%;
object-fit: cover;
object-position: center;">
    <h1 class="text-light mb-3"><a href="index.html">Rainer Kößling</a></h1>
    <p class="text-light text-center mb-0">Telefon: 0176 56908588</p>
    <p class="text-light text-center">koessling@baucampus.de</p>
  </div>
</div>
</header><!-- End Header -->