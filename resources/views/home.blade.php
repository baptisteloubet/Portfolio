@extends('layouts.accueil')

@section('content')
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h2 class="pb-3 text-white">Mon Profil</h2>
                    <form method="POST" action="{{ route('profile.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="input-group input-group-lg"> 
                                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group input-group-lg">
                                <input id="name" placeholder="Prénom Nom" type="text" class="form-control " name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row justify-content-center">
                        <div>
                            <form action="{{ route('profile.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-sm  btn-danger"><i class="fas fa-angry fa-lg"></i> (Supprimer mon compte)</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection    