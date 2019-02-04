@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-sm-6 mt-5">
        <h4 class="mb-3">My personnal Information</h4>
        <hr>
            @if(session('success'))
                <div class="bg-dark h6  p-2 rounded text-light">
                    <span>{{ session('success') }}</span>
                </div>
            @endif
        <p><strong>Full Name:</strong> {{ $result->firstName.' '.$result->lastName }}</p>
        <p><strong>Birdhdate:</strong> {{ $result->birthdate}}<p>
        <p><strong>Adresse:</strong> {{ $result->address}}</p>
        <a href="{{ route('showPersonnalInformationForm') }}" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Update</a>    
    </div>
</div>
@endsection
