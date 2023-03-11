@extends('mainadmin.mainadmin')
@section('content')
    <div class="card-body">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Users in Database</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $us)
                <tr>
                    <td>{{ $us->id }}</td>
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->email }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/user-edit/'.$us->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('/user-delete/'.$us->id)}}" onclick="return confirm('Are you sure to want to delete this user?')">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@endsection
