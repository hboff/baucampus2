<div id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    
                    <img src="/img/logo.png" alt="" style="    vertical-align: middle;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
object-position: center;" class="description"><br>

                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <p class="description">
                @foreach($regions as $region)
    @if(str_contains(url()->current(), "baucampus.de"))
    @if ($region->Country == 'Germany')
    <a class="link-dark" href="/baugutachter/{{$region->Region}}">Baugutachter {{$region->Region}}</a><br>
    @endif
@endif
@if(str_contains(url()->current(), "baucampus.be"))
@if ($region->Country == 'Austria')
    <a class="link-dark" href="/baugutachter/{{$region->Region}}">Baugutachter {{$region->Region}}</a><br>
    @endif
    @endif
    @endforeach
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    
                    <p class="description">
@foreach($regions as $region)
@if($region->Region == $ortsname)
    @foreach($ortat as $orte)
        @if ($orte->bundesland == $region->RegionShort)
            <a class="link-dark" href="/{{$orte->ort}}/bausachverstaendiger">Baugutachter {{$orte->ort}}</a><br>
        @endif
    @endforeach
@endif
@endforeach  
    </p>
</p>
                </div>
                

            </div>
        </div>
<div class="container"><a class="description link-secondary mb-5" href="/impressum">Impressum</a>
                    <a class="description link-secondary mb-5" href="/datenschutzerklaerung">Datenschutzerklärung</a>
</div>