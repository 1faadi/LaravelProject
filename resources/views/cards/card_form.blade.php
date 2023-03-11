@extends('mainadmin.mainadmin')
@section('content')
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">CREATE CARD</h1>
                                    </div>
                                    <form action="{{url('/card-store')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input id="name" type="text" class="form-control @error('heading') is-invalid @enderror" name="heading"  autofocus>

                                            @error('heading')
                                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Paragragh</label>
                                            <input id="para" type="text" class="form-control @error('para') is-invalid @enderror" name="para"  autofocus>

                                            @error('para')
                                            <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input id="image" multiple type="file" class="form-control" name="image[]" >

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button href="" type="submit" class="btn btn-primary btn-block">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
