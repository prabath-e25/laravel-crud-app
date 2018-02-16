@extends('main')
  @section('content')

  <div class="row">
    <div class="col-md-6">
      <h1>View Apartment Details</h1>
    </div>
    <div class="col-md-6">
      <a href="./apartment/{{$apartment->id}}/edit" title="Edit Apartment Details" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i></a>
    </div>
  </div>

  <div class="form-three widget-shadow">
    <div class="panel-body-inputin">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-md-3 control-label">Apartment Name :</label>
          <div class="col-md-9">
            <label class="control-label">{{$apartment->apartment_name}}</label>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Apartment Address :</label>
          <div class="col-md-9">
            <label class="control-label">{{$apartment->apartment_address}}</label>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">no_of_rooms :</label>
          <div class="col-md-9">
            <label class="control-label">{{$apartment->no_of_rooms}}</label>
          </div>
        </div>

      </form>
    </div>
  </div>

  @stop
