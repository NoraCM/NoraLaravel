@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
  <div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mt-2">Login</h4>
        <hr>
        <form class="p-0 mt-2 mb-5" method="post" action="{{ route('handleLogin') }}">
            @if(session('error'))
                <div class="bg-dark h6  p-2 rounded text-light">
                    <span>{{ session('error') }}</span>
                </div>
            @endif
            <div class="form-group">
                <label>Enter Email</label>
                <input type="Email" name="email" class="form-control" required> 
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <input type="submit" name="" class="btn btn-dark">
            {{csrf_field()}}   
        </form>
    </div>
    <p>If you not a member yet please register from <a href="{{ url('register')}}">Here</a></p>
  </div>
  @endsection 