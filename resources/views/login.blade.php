@extends('layouts.header')

@section('content')
@section('title', 'Login')

<!-- Login  -->
<form method="post" class="lg-form text-center" action="{{url('login')}}">
    {{csrf_field()}}


    <!-- For Validation Errors -->
    @if(count($errors) > 0)
    <div id="error" class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4>
        @foreach($errors->all() as $error)
        <div class="msg">{{$error}}</div>
        @endforeach
    </div>
    @endif

    @if(Session::get('error_msg'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4>
        {{Session::get('error_msg')}}
    </div>
    @elseif(Session::get('success_msg'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Success !</h4>
        {{Session::get('success_msg')}}
    </div>
    @endif


    <h1 class="mb-5 font-weight-light text-uppercase text-dark">Login</h1>

    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <!-- Email -->
    <div class="form-group">
        <input type="email" id="forms" name="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>

    <!-- Password -->
    <div class="form-group">
        <input type="password" id="forms" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <button type="submit" id="btn-form" class="btn mt-5  btn-lg btn-block text-uppercase">Login</button>

</form>
<!-- End Login -->
</body>

</html>
@stop