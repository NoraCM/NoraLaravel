@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container-fluid">
    <div class="col-sm-4 mt-5">
        <div class="mt-5 mb-4">
            <a class="btn btn-dark w-100 text-left" href="{{ url('/personnal-information') }}"><i class="fas fa-user"></i> Manage Personnal Informations</a>
        </div>
        <div class="mb-4">
            <a class="btn btn-dark w-100 text-left" href="{{ url('/pictures') }}"><i class="fas fa-image"></i> Manage My Pictures</a>
        </div>
        <div>
            <a class="btn btn-dark w-100 text-left" href="{{ url('/personnal-messages') }}"><i class="fas fa-envelope-open"></i> Manage Personnal Messages</a>
        </div>
    </div>
</div>
@endsection
