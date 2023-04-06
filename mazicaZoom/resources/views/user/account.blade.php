@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: auto">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
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
  
  
  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Become an Artist') }}</div>

                <div class="card-body">
                    @if (!Auth::user()->I_want_to_become_an_artist)
                        <form method="POST" action="{{ asset('/I_want_to_become_an_artist') }}">
                            @csrf
                            <input name="image" value="{{ Auth::user()->image }}" type="hidden">
                            <input name="nom" value="{{ Auth::user()->name }}" type="hidden">
                            <input name="pays" value="{{ Auth::user()->pays }}" type="hidden">
                            <input name="date_de_naissance" value="{{ Auth::user()->date_de_naissance }}" type="hidden">

                            <button type="submit" class="btn btn-primary">{{ __('I want to become an artist') }}</button>
                        </form>
                    @else
                        <p>{{ __('You have already applied to become an artist.') }}</p>
                    @endif

                    <form method="POST" action="{{ asset('/updatUser/'.Auth::user()->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-success">{{ __('Confirm') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection