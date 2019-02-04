@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-md-8 mt-3 bg-light p-5 rounded mb-3">
        <h5 class="mb-3">New Message</h5>
        <hr>
        <form class="p-0 mt-2 mb-5" method="post" action="{{ route('sendMessage') }}">
        <div class="form-group">
            <label>Your Message</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>
        <input type="hidden" name="recipient_id" value="{{ $to }}">
        <input type="submit" name="" class="btn btn-dark">
        {{csrf_field()}}   
    </form>
    </div>
</div>
@endsection
