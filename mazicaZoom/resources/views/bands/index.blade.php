@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-12" style="overflow: auto;">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Image</th>
              <th>Member</th>
              <th>Pays</th>
              <th>Date de création</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bands as $bande)
              <tr>
                <td>{{ $bande->id }}</td>
                <td>{{ $bande->nom }}</td>
                <td><img src="{{ '/images/' . $bande['image'] }}" class="card-img-top" alt="{{ $bande['nom'] }}" style="width: 50px"></td>
                <td>{{ $bande->member }}</td>
                <td>{{ $bande->pays }}</td>
                <td>{{ $bande->date_de_creataion }}</td>
                <td>
                  <a href="{{ asset('show/'. $bande->id) }}" class="btn btn-sm btn-info">Voir</a>
                  <a href="{{ asset('edit/'. $bande->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                  <form action="{{ asset('deletbande/destroy/' . $bande->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
  