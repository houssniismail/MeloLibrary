@extends('layouts.app')

@section('content')

@if (session('status'))
<div role="alert">
    {{ session('status') }}
</div>
@endif
{{-- <div>
  <livewire:piece-show :pieces="$pieces" />
</div> --}}
<form action="{{ route('pieceMusical.search') }}" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>
<div class="cardsm">
  @foreach ($pieces as $item)
  
  {{-- @if (strpos(strtolower($item['artists']), strtolower($searchArtist)) !== false 
      && strpos(strtolower($item['titre']), strtolower($searchTitre)) !== false) --}}
      <div class="cardm cardm1">
          <div class="containerm">
              <a href="{{asset('/playmusic/' . $item['id'])}}">
                  <img class="img" src="{{asset('/images/'. $item['image'])}}"
                  alt="Card image cap">
              </a>
          </div>
          <div class="details">
              <h3>{{$item['artists']}}</h3>
              <p>{{$item['titre']}}</p>
          </div>

      </div>
  {{-- @endif --}}

@endforeach


</div>
@endsection
