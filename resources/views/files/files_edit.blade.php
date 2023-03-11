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
                                        <h1 class="h4 text-gray-900 mb-4">Update Slider</h1>
                                    </div>
                                    <form action="{{url('/files-update/'.$files->id)}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                            <label>Image</label>
                                            <input id="image"  type="file" class="form-control" value="{{ $files->image }}" name="image" >

                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <img src="{{asset($files->files)}}" height="90px" width="90px">
                                        <div class="form-group">
                                            <button href="" type="submit" class="btn btn-primary btn-block">Update</button>
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
