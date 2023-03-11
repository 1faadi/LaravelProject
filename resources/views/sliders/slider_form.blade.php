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
                                        <h1 class="h4 text-gray-900 mb-4">CREATE SLIDER</h1>
                                    </div>
                                    <form action="{{url('/slider-store')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  autofocus>

                                            @error('title')
                                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" required autocomplete="email" autofocus>

                                            @error('desc')
                                            <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input id="image" type="file" class="form-control" name="image" >

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
