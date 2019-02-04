@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-md-8 mt-3  p-5 rounded mb-3">
        <a href="{{ url('/users')}}" class="float-right">List of users</a>
        <h5 class="mb-3">My Personnal Messages</h5>
        <hr>
        @if(isset($result) && !$result->isEmpty())
            <ul class="row p-0 pt-2 pb-2 m-0">     
            @foreach($result as $value)
                <li class="list-unstyled p-0 col-md-12">
                    <h6>{{ $value->firstName.' '.$value->lastName }}</h6>
                    <p>{{ $value->content }}<small class="float-right">{{ $value->created_at }}</small></p>
                    <p>
                        <a class="btn bg-dark text-light float-right" href="{{ route('messageForm',['id'=>$value->sender_id]) }}">
                        Reply
                        </a>
                    </p>
                    <br>
                    <hr class="d-block mt-4">
                </li>
            @endforeach
            </ul>
            @else
            <p>You have 0 new messages</p>
            <a href="">Show Old messages</a>
        @endif
    </div>
</div>
@endsection
