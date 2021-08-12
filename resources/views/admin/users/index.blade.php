@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.users.create') }}">
                        <button type="button" class="btn btn-primary">Add</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ implode(',',$user->roles()->get()->pluck('name')->toArray())  }}</td>
                            <td>
                                @can('edit-users')
                                <a href="{{ route('admin.users.edit',$user->id) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                @endcan
                                @can('delete-users')
                                <a href="{{ route('admin.users.destroy',$user->id) }}">
                                <form action="{{ route('admin.users.destroy',$user) }}" method="POST">
                                @csrf
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                @endcan

                                </a>
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
