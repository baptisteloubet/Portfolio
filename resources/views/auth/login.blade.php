@extends('layouts.accueil')

@section('content')
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h2 class="pb-3 text-white">Connectez-vous</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="input-group input-group-lg">
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div  class="input-group input-group-lg">
                            <input id="password" placeholder="Mot de Passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Connexion
                            </button>
                        </div>
                    </div>
                </form>
                <div class="form-group row justify-content-center">
                    <div>
                        <a class="btn" href="{{route('register')}}">Pas de compte ? </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection    
