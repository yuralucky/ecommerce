@extends('layouts')
@section('content')
    <div class="container">
        <div class="col-8 offset-2 ">
            <h3 class="text-center">Log in</h3>
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sign in</h4>

                    <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp;  Sign in with Facebook</a>
                    <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp;  Sign in with Google</a>

                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="" class="form-control" placeholder="ex. name@gmail.com" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <a class="float-right" href="#">Forgot</a>
                            <label>Password</label>
                            <input class="form-control" placeholder="******" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
                        </div> <!-- form-group form-check .// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                        </div> <!-- form-group// -->
                    </form>
                </div> <!-- card-body.// -->
            </div> <!-- card .// -->
        </div>
    </div>
@endsection