@extends('mainadmin.mainadmin')
@section('content')
    <div class="card-body">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Cards in Database</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($card as $cd)
                    <tr>
                        <td>{{ $cd->id }}</td>
                        <td>{{ $cd->heading }}</td>
                        <td>{{ $cd->para }}</td>
                        <td><img src="{{ asset($cd->img) }}" height="60px" width="60px"> </td>

                        <td>
                            <a class="btn btn-primary" href="{{url('card-edit/'.$cd->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{url('card-delete/'.$cd->id)}}" onclick="return confirm('Are you sure to want to delete this user?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@endsection
