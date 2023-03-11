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
                                        <h1 class="h4 text-gray-900 mb-4">CREATE FORM</h1>
                                    </div>
                                    <form action="/about-store" method="POST" >
                                        @csrf
                                        <div class="form-group">
                                            <label>heading1</label>
                                            <input id="name" type="text" class="form-control @error('heading1') is-invalid @enderror" name="heading1"   autofocus>

                                            @error('heading1')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>heading2</label>
                                            <input id="name" type="text" class="form-control @error('heading2') is-invalid @enderror" name="heading2"   autofocus>

                                            @error('heading2')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div><div class="form-group">
                                            <label>para</label>
                                            <input id="name" type="text" class="form-control @error('para') is-invalid @enderror" name="para"   autofocus>

                                            @error('para')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div><div class="form-group">
                                            <label>litem1</label>
                                            <input id="name" type="text" class="form-control @error('litem1') is-invalid @enderror" name="litem1"   autofocus>

                                            @error('litem1')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div><div class="form-group">
                                            <label>litem2</label>
                                            <input id="name" type="text" class="form-control @error('litem2') is-invalid @enderror" name="litem2"   autofocus>

                                            @error('litem2')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>litem3</label>
                                            <input id="name" type="name" class="form-control @error('litem3') is-invalid @enderror" name="litem3"  required autocomplete="" autofocus>

                                            @error('litem3')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>text</label>
                                            <input id="name" type="text" class="form-control @error('text') is-invalid @enderror" name="text"   autofocus>

                                            @error('text')
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
