@extends('layouts.dashboard')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Liste des utilisateurs</li>
        </ol>
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Les utilisateurs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                <td> 
                                    @can('is_admin')
                                        <a href="{{route('admin.users.edit', $user->id)}}"><button class=" btn btn-primary">Éditer</button></a>
                                    @endcan
                                </td>
                                <td>
                                    @can('is_admin')
                                      <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Supprimer</button>
                                      </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>    

@endsection