@isset($domain)
    @foreach($regions as $region)

@if ($region->Country == Austria)
    <a class="link-dark" href="/{{$region->Region}}/bausachverstaendiger">Baugutachter {{$region->Region}}</a>
    @endif
  
    @endforeach
@endisset


