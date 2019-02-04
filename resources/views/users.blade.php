@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-md-12 mt-3  p-5 rounded mb-3">
        <h5 class="mb-3">List Of Users</h5>
        <hr>
        @if(isset($users) && !$users->isEmpty())
            <ul class="m-0 p-0">     
            @foreach($users as $value)
                <li class="list-unstyled p-0">
                    <p>
                        {{ $value->firstName.' '.$value->lastName }}
                        <a title="Send message" class="text-dark ml-4" href="{{ route('messageForm',['id'=>$value->id]) }}">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </p>
                </li>
            @endforeach
            </ul>
            @else
            <p>There are 0 users</p>
        @endif
    </div>
</div>
@endsection
