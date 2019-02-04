@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mb-3">My personnal Information</h4>
        <hr>
        <form class="p-0 mt-2 mb-5" method="post" action="{{ route('updatePersonnalInformation') }}">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" value="{{ $result->firstName}}">
        </div>
        <div class="form-group">
            <label>Last Name</label>    
            <input type="text" name="lastname" class="form-control" value="{{$result->lastName }}"> 
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="birthdate" class="form-control" value="{{ $result->birthdate}}">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address">{{ $result->address}}</textarea>
        </div>
        <input type="submit" name="" value="Save" class="btn btn-dark">
        {{csrf_field()}}   
        </form>   
    </div>
</div>
@endsection
