@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{implode(', ' , $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                            
                            @can('edit-users')
                            <a href="{{ route('admin.users.edit', $user->id) }}"><button type="submit" class="btn btn-primary float-left">Edit</button></a>
                            @endcan
                            
                            @can('delete-users')
                            <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="float-left">
                                @csrf
                               {{ method_field('DELETE') }} 
                            <button type="submit" class="btn btn-warning">Delete</button>
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
</div>
@endsection
