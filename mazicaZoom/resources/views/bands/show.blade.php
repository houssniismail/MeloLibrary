@extends('layouts.app')

@section('content')

<div class="card">
    <img src="{{ '/images/' . $bande['image'] }}" class="card-img-top" alt="{{ $bande['nom'] }}" style="width: 200px">
    <div class="card-body">
      <h5 class="card-title">{{ $bande['nom'] }}</h5>
      <p class="card-text">Member: {{ $bande['member'] }}</p>
      <p class="card-text">Pays: {{ $bande['pays'] }}</p>
      <p class="card-text">Date de création: {{ $bande['date_de_creataion'] }}</p>
    </div>
  </div>

  @endsection