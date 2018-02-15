@extends('main')
  @section('content')
    <div class="row">
      <div class="col-md-6">
        <h1>Apartments</h1>
      </div>
      <div class="col-md-6">
        <a href="./apartments/create" class="btn btn-primary pull-right">Add Apartment</a>
      </div>
    </div>
    <div class="tables">
    @if($apartments)
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
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
