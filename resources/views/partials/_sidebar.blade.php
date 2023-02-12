@isset($expert)
<header id="header">

<!-- ======= Header ======= -->
<div class="d-flex flex-column" id="sidebarprofile">
  <!-- ======= profile1 ======= -->

  <div class="profile">
    <img src="" alt="" class="mt-4" style="    vertical-align: middle;
width: 180px;
height: 180px;
border-radius: 50%;
object-fit: cover;
object-position: center;">

    <h1 class="text-light mb-3"><a href="">1</a></h1>
    <p class="text-light text-center mb-0">2</p>
    <p class="text-light text-center">3</p>
  </div>
@else
@endif
@endforeach
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
@endisset