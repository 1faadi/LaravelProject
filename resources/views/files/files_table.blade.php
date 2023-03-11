@extends('mainadmin.mainadmin')
@section('content')
    <div class="card-body">
        <div class="card-header py-3 d-flex flex-row align-items-center jaboutstify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">About Us Details</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flaboutsh">
                <thead class="thead-light">
                <tr>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $img)
                    <tr>
                        <td><img src="{{asset($img->files)}}" height="60px" width="60px"></td>

                        <td>
                            <a class="btn btn-primary" href="{{url('files-edit/'.$img->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{url('files-delete/'.$img->id)}}" onclick="return confirm('Are you sure to want to delete this aboutser?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@endsection
