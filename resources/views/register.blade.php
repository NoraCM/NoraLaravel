@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mt-2">Inscription</h4>
        <hr>
        <form class="p-0 mt-2 mb-5" method="post" action="{{ route('handleRegister') }}">
        @if(session('error'))
            <div class="bg-dark h6  p-2 rounded text-light">
                <span>{{ session('error') }}</span>
            </div>
        @endif
        <div class="form-group">
            <label>Enter First Name</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Enter Last Name</label>    
            <input type="text" name="lastname" class="form-control" required> 
        </div>
        <div class="form-group">
            <label>Enter Birthday</label>
            <input type="date" name="birthdate" class="form-control" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="address" required>Your address</textarea>
        </div>
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
</div>
@endsection
