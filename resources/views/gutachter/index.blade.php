@php
$contact=1;
@endphp
<!-- Photoswipe library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.5/umd/photoswipe.umd.min.js" integrity="sha512-BGx0nICmNXjHxPsFbwYviMAT08lytG9dR8vnTEfxLNtCkdeALgC6nDbrhrG0DcnDufmNGFiCXgXIuPPXoo4zPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.5/umd/photoswipe-lightbox.umd.min.js" integrity="sha512-CpBwN19ws59x5RFIMhBV+IYMhqtp4HTzVgfW1PCxkg36bwXu4tlWs47RiSUCj+EUhaeRMxj4w7CUG5v9w+7h1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.5/photoswipe.css" integrity="sha512-OKOmvT2OKCG+gZ/a+r5CL4kiNCpeda/gwQ2H+ndaNZlwZUp29wxNcrkoJ44udPFmSP9xLxK6dWVoib963YJTCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .osk-custom {
    background-color: #6d767e;
  }

  .osk-custom2 {
    backdrop-filter: invert(.2) blur(10px);
  }

  .osk-customs {
    z-index: 5000;
    backdrop-filter: invert(.2) blur(10px);
  }

  .oska {
    padding-left: 12.33vw;
    padding-right: 15vw;
  }

  .avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
</style>

@extends('layout')
@section('content')
@foreach ($gutachter as $gutachters)
@if ($name == $gutachters['UrlName'])
<!-- ======= Hero Section ======= -->
<section  class="d-flex flex-column justify-content-center align-items-center">
<img src="https://www.mein-haus.eu/bilder/mein-haus.jpg" alt="Mein Haus" style="width:100%;height:100vh; object-fit: cover; object-position:center;">

    <div class="hero-container" data-aos="fade-in">

      <h1> {{$gutachters['FirstName']}} {{$gutachters['LastName']}} </h1>
      <p>Ich bin <span class="typed" data-typed-items="Gutachter, Unternehmer, Bausachverständiger"></span>
      </p>
    </div>
    <section id="section03" class="demo">
<h1>Scroll Down Button #3</h1>
<a href="#section04"><span></span>Scroll</a>
</section>
  </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Über mich</h2>
          <p>{{$gutachters['Text']}}
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="/img/{{$gutachters['Photo']}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Unternehmer &amp; Bausachverständiger</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Geburtstag:</strong> <span> {{$gutachters['BirthDate']}} </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                    <span>{{$gutachters['Website']}}</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span> {{$gutachters['Phone']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Stadt:</strong> <span> {{$gutachters['Adress']}}, {{$gutachters['PostalCode']}} {{$gutachters['City']}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alter:</strong> <span>{{$gutachters['Age']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$gutachters['Degree']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$gutachters['Email']}}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <div class="test-gallery">
    
@foreach ($gutachter_certificates as $certificate)
    @if ($gutachters['PartnerID'] == $certificate['PartnerID'])
      <a href="/img/certificates/{{$certificate['Certificate']}}.jpg" data-pswp-width="1200" data-pswp-height="600">
        <img src="/img/certificates/{{$certificate['Certificate']}}.jpg"  width="200" height="200" alt="" />
      </a>
      @else
       @endif
 @endforeach
    </div>
   
    <script type="text/javascript">
      var lightbox = new PhotoSwipeLightbox({
        gallery: '.test-gallery',
        children: 'a',
        // dynamic import is not supported in UMD version
        pswpModule: PhotoSwipe 
      });
      lightbox.init();
    </script>


    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Lebenslauf</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>{{$gutachters['FirstName']}} {{$gutachters['LastName']}}</h4>
              <p><em>Bausachverständiger bei Baucampus</em></p>
              <ul>
                <li>{{$gutachters['Adress']}}, {{$gutachters['PostalCode']}} {{$gutachters['City']}}</li>
                <li>{{$gutachters['Phone']}}</li>
                <li>{{$gutachters['Email']}}</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
@foreach ($vitas as $vita)
@if ($gutachters['PartnerId'] == $vita['PartnerId'])
            <div class="resume-item">
              <h4>{{$vita['Degree']}}</h4>
              <h5>{{$vita['Time']}}</h5>
              <p><em>{{$vita['Description']}}</em></p>
            </div>
@endif
@endforeach
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            @foreach ($professional_experience as $experience)
    @if ($gutachters['PartnerID'] == $experience['PartnerID'])
            <div class="resume-item">
              <h4>{{$experience['Title']}}</h4>
              <h5>{{$experience['Time']}}</h5>
              <p>{{$experience['Title']}}</p>
            </div>
            @endif
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Baubegleitung</a></h4>
            <p class="description">Bei der Baubegleitung erfahren Sie Unterstützung bei der Durchführung ihres Neubaus,
              aus unabhängiger und neutraler
              Sicht eines Bausachverständigen.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Bauschaden</a></h4>
            <p class="description">Ein Bauschaden, infolge eines Baumangels bedeutet eine Verschlechterung einer
              Immobilie und muss zügig erkannt und
              beseitigt werden.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Energieberatung</a></h4>
            <p class="description">Bei der Energieberatung beraten wir Sie, wie Sie Energie einsparen und welche
              Fördermittel beantragt werden können.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Hauskaufberatung</a></h4>
            <p class="description">Die Hauskaufberatung hilft Ihnen bei der Suche nach einem Haus und gibt ihnen eine
              professionelle und unabhängige
              Expertise.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Immobilienbewertung</a></h4>
            <p class="description">Auf Basis von Baujahr, Zustand der Bausubstanz und Ausstattung den Wert des Gebäudes
              und addiert den Wert des Grundstücks hinzu.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Schimmelpilz</a></h4>
            <p class="description">Schimmelpilz befällt Stellen in einem Raum in ihrem Haus oder ihrer
              Wohnung. Schimmelpilz
              kann unschön bis gefährlich sein.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    @else
@endif
@endforeach
    @endsection