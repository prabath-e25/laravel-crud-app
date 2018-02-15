@extends('main')
  @section('content')

  <h1>Create Apartment</h1>
  <div class="form-three widget-shadow">
    <div class=" panel-body-inputin">
      {!! Form::open(['action' => 'ApartmentsController@addApartments']) !!}
        {!! Form::text('name', ['class' => 'awesome']); !!}
        {!! Form::submit('Click Me!'); !!}

      {!! Form::close() !!}
    </div>
  </div>

  @stop
