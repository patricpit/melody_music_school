@extends('layouts.mobile')

@section('content')
</br>
<div class="w-4/5 m-auto text-center">
    <div class="row justify-content-center flex-auto">
            <div class="col-12">
                <strong><h1 class="float-left">Users</h1></strong>
                <a class="btn btn-sm btn-success float-right" href="{{ route('admin.users.create') }}" role="button">Create</a>
            </div>
    </div>
    
</br>
    <div class="card shadow mb-5">
        <table class="table table-bordered table-striped table-responsive-lg">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->id) }}" role="button">Edit</a>
                            <button type="button" class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-user-form{{ $user->id }}').submit()">
                                Delete
                            </button>
                            <form id="delete-user-form{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none">
                                @csrf 
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>

@endsection