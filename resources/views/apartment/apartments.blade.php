@extends('main')
  @section('content')
    <div class="row">
      <div class="col-md-6">
        <h1>Apartments</h1>
      </div>
      <div class="col-md-6">
        <a href="./apartments/create" class="btn btn-primary pull-right">New Apartment</a>
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
                <td>
                  <a class="btn btn-primary" title="View" href='./apartment/{{$apartment->id}}'><i class="fa fa-file"></i></a>
                  <a class="btn btn-primary" title="Edit" href='./apartment/{{$apartment->id}}/edit'><i class="fa fa-pencil"></i></a>
                  {!! Form::open(['class' => 'pull-right','method' => 'DELETE', 'url' => ['/apartments/delete', $apartment->id]]) !!}
                      {{Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                  {!! Form::close() !!}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    @endif
  </div>
  @stop
