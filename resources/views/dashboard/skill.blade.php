@extends('layouts.dashboard')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Compétences</li>
        </ol>
        <form action="{{route('dashboard.skill.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Compétence 1</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$skill->title1}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description 1ère compétence</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$skill->description1}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Compétences 2</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$skill->title2}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description 2ème compétences</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$skill->description2}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Compétences 3</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$skill->title3}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description 3ème compétences</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$skill->description3}}</textarea>
                    </div>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Compétences 4</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$skill->title4}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Description 4ème Compétences</h4></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description">{{$skill->description4}}</textarea>
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