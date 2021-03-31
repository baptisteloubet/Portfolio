@extends('layouts.dashboard')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Projets</li>
        </ol>
        <form action="{{route('dashboard.project.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Image Projet 1</h3>
                <img style="height: 30vh" src="../img/portfolio-1.jpg" class="img-thumbnail">
                </div>
                <div class="form-group col-md-3 mt-3">
                    <h3>Image Projet 2</h3>
                <img style="height: 30vh" src="../img/portfolio-2.jpg" class="img-thumbnail">
                </div>
                <div class="form-group col-md-3 mt-3">
                    <h3>Image Projet 3</h3>
                <img style="height: 30vh" src="../img/portfolio-3.jpg" class="img-thumbnail">
                </div>
                <div class="form-group col-md-3 mt-3">
                    <h3>Image projet 4</h3>
                <img style="height: 30vh" src="../img/portfolio-4.jpg" class="img-thumbnail">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Titre 1er Projet</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$project->title1}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description projet 1</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$project->description1}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Titre 2ème Projet</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$project->title2}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description projet 2</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$project->description2}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Titre 3ème Projet</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$project->title3}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description projet 3</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$project->description3}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Titre 4ème Projet</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$project->title4}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description projet 4</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$project->description4}}</textarea>
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