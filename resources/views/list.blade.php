@extends('layout')

@section('content')

<br><br>
<h1 class="text-center">List All Restaurants</h1>

    <div class="container">
    
      @if(Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
      @endif
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                
                    <tr>
                        <th scope="row">{{$restaurant->id}}</th>
                        <td>{{$restaurant->name}}</td>
                        <td>{{$restaurant->email}}</td>
                        <td>{{$restaurant->address}}</td>
                        <td>
                        <!--<a href="/delete/{{$restaurant->id}}"><i class="fa fa-trash"></i></a>-->
                        <a href="/delete/{{$restaurant->id}}" type="button" class="btn btn-danger">Delete</a>
                        <a href="/edit/{{$restaurant->id}}" type="button" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

      <br>
      <a href="/add" type="button" class="btn btn-success">Add New Restaurant</a>
    </div>  
@stop