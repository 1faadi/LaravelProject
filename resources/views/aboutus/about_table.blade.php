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
                    <th>heading1</th>
                    <th>heading2</th>
                    <th>para</th>
                    <th>litem1</th>
                    <th>litem2</th>
                    <th>litem3</th>
                    <th>text</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($about as $abouts)
                    <tr>
                        <td>{{ $abouts->heading1 }}</td>
                        <td>{{ $abouts->heading2 }}</td>
                        <td>{{ $abouts->para }}</td>
                        <td>{{ $abouts->litem1 }}</td>
                        <td>{{ $abouts->litem2 }}</td>
                        <td>{{ $abouts->litem3 }}</td>
                        <td>{{ $abouts->text }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{url('about-edit/'.$abouts->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{url('about-delete/'.$abouts->id)}}" onclick="return confirm('Are you sure to want to delete this aboutser?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



@endsection
