@extends('layouts.app')

@section('content')

    <table class="table mx-auto" >
        <thead class="">
            <tr>
                <th style="text-align: center">Image</th>
                <th style="text-align: center">Nom</th>
                <th style="text-align: center">Pays</th>
                <th style="text-align: center">Date de naissance</th>
                <th style="text-align: center">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td style="text-align: center"><img src="{{ asset('/storage/images/' . $artist->image) }}" alt="{{ $artist->nom }}" width="50px"></td>
                    <td style="text-align: center">{{ $artist->nom }}</td>
                    <td style="text-align: center">{{ $artist->pays }}</td>
                    <td style="text-align: center">{{ $artist->date_de_naissance }}</td>
                    <td style="text-align: center"> 
                        <button>delete</button>
                        <button>conferm</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  


@endsection
