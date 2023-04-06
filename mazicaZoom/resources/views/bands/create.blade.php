


@extends('layouts.app')

@section('content')  
<form class="" method="POST" action="{{asset('/storebanes')}}" enctype="multipart/form-data">
    @csrf

    <div class="col-sm-6 ">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" class="form-control" required>
    </div>

    <div class="col-sm-6">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>

    <div class="col-sm-6">
        <label for="member">Member:</label>
        <input type="text" name="member" id="member" class="form-control" required>
    </div>

    <div class="col-sm-6">
        <label for="pays">Pays:</label>
        <input type="text" name="pays" id="pays" class="form-control" required>
    </div>

    <div class="col-sm-6">
        <label for="date_de_creataion">Date de création:</label>
        <input type="date" name="date_de_creataion" id="date_de_creataion" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>


@endsection
