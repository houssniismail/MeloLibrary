@extends('layouts.app')

@section('content')

  
<table class="table">
    <thead>
        <tr>
            <th>Audio</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Artists</th>
            <th>Ecrivan</th>
            <th>Langeu</th>
            <th>Date de sortie</th>
            <th>Actions</th> <!-- Add a new column for the action buttons -->
        </tr>
    </thead>
    <tbody>
        @foreach($pieces as $piece)
            <tr>
                <td>{{ $piece->audio }}</td>
                <td>{{ $piece->image }}</td>
                <td>{{ $piece->titre }}</td>
                <td>{{ $piece->artists }}</td>
                <td>{{ $piece->ecrivan }}</td>
                <td>{{ $piece->langeu }}</td>
                <td>{{ $piece->date_de_sortie }}</td>
                <td>
                    <!-- Add "show" button -->
                    <a class="btn btn-primary" href="{{ asset('/showpiece/' . $piece->id) }}">Show</a>
                    <a href="{{ asset('editpiece/'. $piece->id) }}" class="btn btn-sm btn-primary">Update</a>
                    <!-- Add "delete" button -->
                    <form action="{{asset('deletepiece/' . $piece->id)}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
