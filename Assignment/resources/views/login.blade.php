@extends('Layouts.navigation')
@section('content')
    

<form method="post" action="">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Please enter your valid mail"value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="pass" value="{{old('pass')}}" class="form-control" id="exampleInputPassword1">
    </div>
    @error('pass')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  @endsection