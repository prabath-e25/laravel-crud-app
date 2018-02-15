@extends('main')
  @section('content')
    <div class="tables">
    <h1>Apartments</h1>
    @if($apartments)
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
      <h4>Hover Rows Table:</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Address</th>
              <th>no_of_rooms</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($apartments as $apartment)
              <tr>
                <th scope="row">{{$apartment->id}}</th>
                <td>{{$apartment->apartment_name}}</td>
                <td>{{$apartment->apartment_address}}</td>
                <td>{{$apartment->no_of_rooms}}</td>
                <td><a href='./apartment/{{$apartment->id}}'>edit</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    @endif
  </div>
  @stop
