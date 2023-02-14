@isset($domain)
    @foreach($regions as $region)
    @if ($domain == immobilienbewertung-bielefeld.com)
    @if ($region->Country == Germany)
    <a class="link-dark" href="/{{$region->Region}}/bausachverstaendiger">Baugutachter {{$region->Region}}</a>
    @endif
@endif
@if ($domain == baucampus.be)
@if ($region->Country == Austria)
    <a class="link-dark" href="/{{$region->Region}}/bausachverstaendiger">Baugutachter {{$region->Region}}</a>
    @endif
    @endif
    @endforeach
@endisset


