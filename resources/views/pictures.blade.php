@extends('layout')
  @section('header')
    @include('include.link')
  @endsection
  @section('content')
<div class="container">
    <div class="col-md-8 mt-3  p-5 rounded mb-3">
        <h5 class="mb-3">My Gallery</h5>
        <hr>
        @if( isset($result) && !$result->isEmpty())
            <ul class="row p-0 pt-2 pb-2">     
            @foreach($result as $value)
                <li class="col-md-4 list-unstyled p-0">
                    <img src="./storage/{{$value->source}}" class="w-100">
                    <small>{{ $value->created_at }}</small>
                    <a class="btn remove bg-dark text-light" href="{{ route('deletePicture',['id'=>$value->id]) }}">
                        <i class="fas fa-times"></i>
                    </a>
                </li>
            @endforeach
            </ul>
            @else
            <p>Your gallery is empty</p>
         @endif
        <form method="post" action="{{ route('handlePictures') }}" enctype="multipart/form-data">
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" required id="customFile" name="photo">
                <label class="custom-file-label" for="customFile" >Add a new picture</label>
            </div>
            <input class="btn btn-dark" type="submit" value="Add Picture" name="">
            {{csrf_field()}}  
        </form>
    </div>
</div>
@endsection
