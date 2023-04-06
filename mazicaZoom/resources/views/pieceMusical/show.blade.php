@extends('layouts.app')

@section('content')

<div class="card" style="width: 18rem;">
    <img src="{{asset('/images/'. $piece->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$piece->titre}}</h5>
      <p class="card-text">Artist: {{$piece->artists}}</p>
      <p class="card-text">Writer: {{$piece->ecrivan}}</p>
      <p class="card-text">Language: {{$piece->langeu}}</p>
      <p class="card-text">Release Date: {{$piece->date_de_sortie}}</p>
      <audio controls>
        <source src="{{asset('/audios' . $piece->audio)}}" type="audio/mpeg">
      </audio>
    </div>
  </div>
@endsection