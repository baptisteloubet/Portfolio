@extends('layouts.dashboard')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Accueil</li>
        </ol>
        <form action="{{route('dashboard.main.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Image de fond</h3>
                <img style="height: 30vh" src="../img/bg-masthead.jpg" class="img-thumbnail">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Titre</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description</h4></label>
                        <textarea type="text" class="form-control " rows="5" id="description" name="description">{{$main->description}}</textarea>
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