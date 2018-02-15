@extends('main')
  @section('content')

  <h1>Create Apartment</h1>
  <div class="form-three widget-shadow">
    <div class=" panel-body-inputin">
      {!! Form::open(['class' => 'form-horizontal']) !!}
        <div class="form-group">
          {!! Form::label('Apartment Name', null, ['class' => 'col-md-3 control-label']) !!}
          <div class="col-md-9">
            <div class="input-icon right spinner">
              {!! Form::text('name', null, ['class' => 'form-control1', 'placeholder' => 'placeholder']); !!}
              {!! Form::submit('Click Me!'); !!}
            </div>
            <p class="help-block"></p>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>

  @stop
