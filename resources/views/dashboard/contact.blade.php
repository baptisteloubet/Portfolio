@extends('layouts.dashboard')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
        <form action="{{route('dashboard.contact.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Titre de la section</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$contact->title}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Titre du bouton de téléchargement</h4></label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$contact->description}}">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <input type="submit" name="submit" class="btn btn-primary ">
            </div>
        </form>
    </div>
</main>    

@endsection