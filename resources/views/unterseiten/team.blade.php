@extends('layout')
@section('content')

<title>Baucampus Team</title>
<meta name="Description" content="Team Baucampus">


<body class="w3-light-grey">
<img src="/img/baubegleitung.jpg" alt="Baubegleitung" title="Baubegleitung" style="width:100%; height:500px; object-fit: cover; object-position:center;">

<!-- Grid -->


<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="/img/oskar.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  </div>

<div class="container py-5">
    <!-- Row One [Team]-->
    <h2 class="font-weight-bold mb-2">Our Team</h2>
    <p class="font-italic text-muted mb-4">Baucampus Team</p>

    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/oskar.jpg" alt="" class="w-100 card-img-top"
                        style="  object-fit: contain;">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Oskar Lohse</h5>
                        <p class="text-muted">Founder & CEO</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/heller.jpg" alt="" class="w-100 card-img-top">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Barbara Heller</h5>
                        <p class="text-muted">COO</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/freda.jpg" alt="" class="w-100 card-img-top">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Freda Lohse</h5>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/casimir.jpg" alt="" class="w-100 card-img-top">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Casimir Arlabosse</h5>
                        <p class="text-muted">Chief Technology Officer</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Row two [Team]-->

    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/dominik.jpg" alt="" class="w-100 card-img-top">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Dominik Bendrien</h5>
                        <p class=" text-muted">Country Manager Austria</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/anthony.jpg" alt="" class="w-100 card-img-top">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Anthony Yaghi</h5>
                        <p class=" text-muted">Country Manager France</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="/img/javier.jpg" alt="" class="w-100 card-img-top">
                    <div class="p-4">
                        <h5 class="mb-0 py-2">Javier Tur Llobell</h5>
                        <p class=" text-muted">Country Manager Spain</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




@include('partials._contact')
@endsection