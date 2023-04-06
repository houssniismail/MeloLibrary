{{-- {{$bande}} --}}

@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  
<form method="POST" action="{{asset('/updateband/' . $bande->id)}}" enctype="multipart/form-data">
    @csrf
    
    <div class="col-sm-6 ">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" class="form-control" value="{{$bande->nom}}" required >
    </div>

    <div class="col-sm-6">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control" >
    </div>

    <div class="col-sm-6">
        <label for="member">Member:</label>
        <input type="text" name="member" id="member" class="form-control" value="{{$bande->member}}" required>
    </div>

    <div class="col-sm-6">
        <label for="pays">Pays:</label>
        <input type="text" name="pays" id="pays" class="form-control" value="{{$bande->pays}}" required>
    </div>

    <div class="col-sm-6">
        <label for="date_de_creataion">Date de création:</label>
        <input type="date" name="date_de_creataion" id="date_de_creataion" class="form-control" value="{{$bande->date_de_creataion}}" required>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>


@endsection