@extends('layout')

@section('content')

<div class="container">

<br><br>
    <h1 class="text-center">Edit Restaurant</h1>


    <form method="post" action="{{url('/update/'.$restaurant->id)}}">
        @csrf

        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" value="{{$restaurant->name}}" placeholder="Enter name">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$restaurant->email}}" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputAddress" value="{{$restaurant->address}}" placeholder="Enter address">
          </div>

          <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>      

@stop