
    @foreach($regions as $region)
    @if(str_contains(url()->current(), "baucampus.de"))
    @if ($region->Country == Germany)
    <a class="link-dark" href="/{{$region->Region}}/bausachverstaendiger">Baugutachter {{$region->Region}}</a>
    @endif
@endif
@if(str_contains(url()->current(), "baucampus.be"))
@if ($region->Country == Austria)
    <a class="link-dark" href="/{{$region->Region}}/bausachverstaendiger">Baugutachter {{$region->Region}}</a>
    @endif
    @endif
    @endforeach


