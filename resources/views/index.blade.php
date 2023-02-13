@extends('layout')
@section('content')
<title>Baucampus</title>
<meta name="Description" content="Baucampus">
<section id="hero1" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1> {{$gutachters['FirstName']}} {{$gutachters['LastName']}} </h1>
      <p>Ich bin <span class="typed" data-typed-items="Gutachter, Unternehmer, Bausachverständiger"></span>
      </p>
    </div>
    <section id="section03" class="demo">
  <a href="1"><span></span>Scroll</a>
</section>
  </section>

  
</div>

<div id="1" class="w3-row-padding" style="margin:10vh; background-color:#fff;"> 
		<h2 class="heading-separator w3-center">Baucampus</h2>
                <p class="subheading-text w3-center">Das Sachverständigennetzwerk</p>
</div>


<div class="w3-row-padding w3-text-black gr"> 

<div class="w3-third">
    <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
    <a href="/baubegleitung"><img src="https://baucampus.ch/bilder/baubegleitung.jpg" alt="Baubegleitung" style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
    <div class="w3-xlarge w3-display-bottomleft w3-padding" style="background: rgba(255, 255, 255, 0.65); width:100%;">Baubegleitung</div>
</div>
</div>

<div class="w3-third">
    <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
    <a href="/bauschaden"><img src="https://baucampus.ch/bilder2/bauschaden.jpeg" alt="Kultur" style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
    <div class="w3-xlarge w3-display-bottomleft w3-padding" style="background: rgba(255, 255, 255, 0.65); width:100%;">Bauschaden</div>
  </div>
</div>

<div class="w3-third">
  <div class="w3-display-container w3-text-black zooma" style="margin-bottom:16px;">
    <a href="/energieberatung"><img src="https://baucampus.ch/bilder/energieberatung-baucampus-main.png" alt="Fassaden Design" style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
    <div class="w3-xlarge w3-display-bottomleft w3-padding" style="background: rgba(255, 255, 255, 0.65); width:100%;">Energieberatung</div>
  </div>
</div>
</div>


<div class="w3-row-padding w3-text-black gr"> 

<div class="w3-third">
    <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
    <a href="/hauskaufberatung"><img src="https://baucampus.ch//bilder2/hauskaufberatung.jpeg" alt="Öffentliche Verkehrsmittel" style="height:50vh; width: 100% !important; object-fit: cover; object-position:bottom;"></a>

    <div class="w3-xlarge w3-display-bottomleft w3-padding" style="background: rgba(255, 255, 255, 0.65); width:100%;">Hauskaufberatung</div>
  </div>
</div>

<div class="w3-third">
    <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
    <a href="/immobilienbewertung"><img src="https://baucampus.ch/bilder/immobilienbewertung.jpg" alt="Bürogebäude" style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
    <div class="w3-xlarge w3-display-bottomleft w3-padding" style="background: rgba(255, 255, 255, 0.65); width:100%;">Immobilienbewertung</div>
  </div>
</div>

<div class="w3-third">
    <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
    <a href="/schimmelpilz"><img src="https://baucampus.ch/bilder/schimmelpilz2.jpg" alt="Flughafen" style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
    <div class="w3-xlarge w3-display-bottomleft w3-padding" style="background: rgba(255, 255, 255, 0.65); width:100%;">Schimmelpilz</div>
  </div>
</div>
<br/>
</div>
@endsection

