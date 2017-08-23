@extends('layouts.actlayout')
@section('title')
Sign Up
@endsection
@section('content')
<style>
body{background-color:#EEEEEE;}
#register-container{padding:2rem 2rem;background-color:white;margin-top:5rem;text-transform:uppercase;font-family: "futura-pt-n7","futura-pt",Tahoma,Geneva,Verdana,Arial,sans-serif;font-style: normal;font-size:11px;color:#999999;font-weight:700;}
h4{border-top:1px solid gray;padding:1rem 0rem;font-size: 18px;line-height: 1.2;letter-spacing: 2.3px;color:black;}
.form-group input{border-radius:0;font-size:11px;}
.btn{border-radius:0;background-color:black;color:white;border:0px;}
label{letter-spacing:2px;}


</style>
<div class='container'>
<div class='row'><div class='col-md-3'></div>
<div class='col-md-6' id='register-container'>
<div class="page-header"><h4>Sign up using your email address</h4></div>

<div class=row>
<div class='col-md-8'>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Verify Your Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div><div class='col-md-4'></div>
</div>
</div>
<div class='col-md-3'></div></div>
</div>


@endsection
