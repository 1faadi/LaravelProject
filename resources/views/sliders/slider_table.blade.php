@extends('mainadmin.mainadmin')
@section('content')
    <div class="card-body">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Sliders in Database</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slider as $sliders)
                    <tr>
                        <td>{{ $sliders->id }}</td>
                        <td>{{ $sliders->title }}</td>
                        <td>{{ $sliders->desc }}</td>
                        <td><img src="{{ asset($sliders->img) }}" height="60px" width="60px"> </td>

                        <td>
                            <a class="btn btn-primary" href="{{url('slider-edit/'.$sliders->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{url('slider-delete/'.$sliders->id)}}" onclick="return confirm('Are you sure to want to delete this user?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@endsection
