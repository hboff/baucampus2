@extends('layout')
@section('content')
@php
$contact=1;
@endphp

@include('partials._sidebar')
@foreach ($gutachter as $gutachters)
@if ($name == $gutachters['UrlName'])
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1> {{$gutachters['FirstName']}} {{$gutachters['LastName']}} </h1>
      <p>Ich bin <span class="typed" data-typed-items="Gutachter, Unternehmer, Bausachverständiger"></span>
      </p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Über mich</h2>
          <p>Mein Name ist {{$gutachters['FirstName']}} {{$gutachters['LastName']}}
            Ich bin geprüfter und anerkannter Bausachverständiger, Energieberater sowie geprüfter Fachsanierer und Tüv
            zertifizierter Schimmelsanierer

            Ich bin 53 Jahre alt, verheiratet, habe 4 Kinder und verfüge über fast 33 Jahre Berufserfahrung in der
            Baubranche.
            Dieses Wissen wird durch ständige Weiterbildung und zahlreiche Schulungen noch weiter ausgebaut.



          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="/img/{{$gutachters['Photo']}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Unternehmer &amp; Bausachverständiger</h3>
            <p class="fst-italic">
              Telefon: {{$gutachters['Phone']}}

              Email: {{$gutachters['Email']}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Geburtstag:</strong> <span> {{$gutachters['Geburtsdatum']}} </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                    <span>www.baugutachter-kiel.eu</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span> {{$gutachters['Phone']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Stadt:</strong> <span> {{$gutachters['Adress']}}, {{$gutachters['PostalCode']}} {{$gutachters['City']}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alter:</strong> <span>53</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
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
      <a href="/img/{{$gutachters['Photo']}}" data-pswp-width="1200" data-pswp-height="600">
        <img src="/img/{{$gutachters['Photo']}}"  width="200" height="200" alt="" />
      </a>
      <a href="https://dummyimage.com/1200x1200/000/fff" data-pswp-width="1200" data-pswp-height="1200">
        <img src="/img/{{$gutachters['Photo']}}"  width="200" height="200" alt="" />
      </a>
      <a href="https://dummyimage.com/600x1200/000/fff" data-pswp-width="600" data-pswp-height="1200">
        <img src="https://dummyimage.com/30x60/000/fff" alt="" />
      </a>
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
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui
                ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius
                unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart
                dila</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production
                  communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                  project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the
                  design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and
                  advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
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
    @include('partials._contact')
@endsection

 <script>var pswpElement = document.querySelectorAll('.pswp')[0];

// build items array
var items = [];
var galleryElements = document.querySelectorAll('.my-gallery a');
for (var i = 0, l = galleryElements.length; i < l; i++) {
  items.push({
    src: galleryElements[i].getAttribute('href'),
    w: parseInt(galleryElements[i].getAttribute('data-size').split('x')[0]),
    h: parseInt(galleryElements[i].getAttribute('data-size').split('x')[1]),
  });
}

// define options (if needed)
var options = {
  // optionName: 'option value'
  // for example:
  index: 0 // start at first slide
};

// Initialize PhotoSwipe
var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
gallery.init();</script>
</body>

</html>
 @include('partials._themen')