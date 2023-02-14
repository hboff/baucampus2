@isset($domain)
    @foreach($regions as $region)
    @if ($domain == immobilienbewertung-bielefeld.com)
    @if ($region->Country == Germany)
    <a class="link-dark" href="/{{$region->region}}/bausachverstaendiger">Baugutachter {{$region->region}}</a>
    @endif
@endif
@if ($domain == baucampus.at)
@if ($region->Country == Austria)
    <a class="link-dark" href="/{{$region->region}}/bausachverstaendiger">Baugutachter {{$region->region}}</a>
    @endif
    @endif
    @endforeach
@endisset


