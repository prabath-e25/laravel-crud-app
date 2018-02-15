@extends('main')
  @section('content')

  <h1>Update Apartment</h1>
  <div class="form-three widget-shadow">
    <div class=" panel-body-inputin">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-md-3 control-label">Apartment Name</label>
          <div class="col-md-9">
            <div class="input-icon right spinner">
              <input id="email" class="form-control1" value="{{$apartment->apartment_name}}" type="text" placeholder="Processing...">
            </div>
            <p class="help-block"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Apartment Address</label>
          <div class="col-md-9">
            <div class="input-icon right spinner">
              <input id="email" class="form-control1" type="text" value="{{$apartment->apartment_address}}" placeholder="Processing...">
            </div>
            <p class="help-block"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">no_of_rooms</label>
          <div class="col-md-9">
            <div class="input-icon right spinner">
              <input id="email" class="form-control1" value="{{$apartment->no_of_rooms}}" type="text" placeholder="Processing...">
            </div>
            <p class="help-block"></p>
          </div>
        </div>

      </form>
    </div>
  </div>

  @stop
