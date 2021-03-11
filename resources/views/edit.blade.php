@extends('layouts.header')


@section('content')

@include('layouts.user-headers')


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

<!-- Update User -->
<p class="login-box-msg text-center">Update User</p>
<form method="post" class="lg-form text-center" action="{{url('update')}}">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$userDetails->id}}">

    <!-- Name -->
    <div class="form-group">
        <input type="name" id="forms" name="name" class="form-control" placeholder="Name" value="{{$userDetails->name}}"
            required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>

    <!-- Email -->
    <div class="form-group">
        <input type="email" id="forms" name="email" class="form-control" placeholder="Name"
            value="{{$userDetails->email}}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    
    <!-- Select User Type -->
    <div class="form-group">
        <select name="user_type" id="forms" class="form-control" value="{{$userDetails->user_type}}" required>
            <!-- Front End Developer -->
            <optgroup label="Front End Developer"></optgroup>
            <option value="angular">&nbsp;&nbsp;Angular</option>
            <option value="angularJs">&nbsp;&nbsp;&nbsp;&nbsp;AngularJs</option>
            <option value="angular 2">&nbsp;&nbsp;&nbsp;&nbsp;Angular 2</option>
            <option value="react">&nbsp;&nbsp;React</option>
            <option value="react native">&nbsp;&nbsp;&nbsp;&nbsp;React native</option>
            <option value="vue">&nbsp;&nbsp;Vue</option>

            <!-- Back End Developer -->
            <optgroup label="Back End Developer"></optgroup>
            <option value="php">&nbsp;&nbsp;PHP</option>
            <option value="symfony">&nbsp;&nbsp;&nbsp;&nbsp;Symfony</option>
            <option value="silex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silex</option>
            <option value="laravel">&nbsp;&nbsp;&nbsp;&nbsp;Laravel</option>
            <option value="lumen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lumen</option>
            <option value="nodeJs">&nbsp;&nbsp;NodeJs</option>
            <option value="express">&nbsp;&nbsp;&nbsp;&nbsp;Express</option>
            <option value="nestJS">&nbsp;&nbsp;&nbsp;&nbsp;NestJS</option>
        </select>

        <button type="submit" id="btn-form" class="btn mt-5  btn-lg btn-block text-uppercase">Update</button>

</form>
<!-- END Update User -->

</body>

</html>
@stop