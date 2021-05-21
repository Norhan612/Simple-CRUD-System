@extends('layout')

@section('content')
<div class="container">
    <br><br>
    <h1 class="text-center">Add Restaurant</h1>

    <form method="post" action="{{url('/store')}}">
        @csrf

        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter name">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Enter address">
          </div>
      <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@stop