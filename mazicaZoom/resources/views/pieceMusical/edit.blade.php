@extends('layouts.app')

@section('content')

<form method="POST" action="{{asset('/updatepiece/' . $piece->id)}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group w-50">
        <label for="audio">Audio file</label>
        <input type="file" class="form-control-file @error('audio') is-invalid @enderror" id="audio" name="audio">
        @error('audio')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group w-50">
        <label for="image">Image file</label>
        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group w-50">
        <label for="titre">Titre</label>
        <input type="text" value="{{$piece->titre}}" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" placeholder="Enter the title">
        @error('titre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group w-50">
        <label for="artists">Artists</label>
        <input type="text" value="{{$piece->artists}}" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists') }}" placeholder="Enter the artists">
        @error('artists')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group w-50">
        <label for="ecrivan">Ecrivan</label>
        <input type="text" value="{{$piece->ecrivan}}" class="form-control @error('ecrivan') is-invalid @enderror" id="ecrivan" name="ecrivan" value="{{ old('ecrivan') }}" placeholder="Enter the author">
        @error('ecrivan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group w-50">
        <label for="langeu">Langeu</label>
        <input type="text" value="{{$piece->langeu}}" class="form-control @error('langeu') is-invalid @enderror" id="langeu" name="langeu" value="{{ old('langeu') }}" placeholder="Enter the language">
        @error('langeu')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group w-50">
        <label for="date_de_sortie">Date de sortie</label>
        <input type="date" value="{{$piece->date_de_sortie}}" class="form-control @error('date_de_sortie') is-invalid @enderror" id="date_de_sortie" name="date_de_sortie" value="{{ old('date_de_sortie') }}">
        @error('date_de_sortie')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection