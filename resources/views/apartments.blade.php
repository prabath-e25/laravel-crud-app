@extends('main')
  @section('content')
    <h1>Apartments</h1>
    @if($apartments)
    <ul>
      @foreach ($apartments as $apartment)
        <li><a href='./apartment/{{$apartment->id}}'>{{$apartment->apartment_name}}</a></li>
      @endforeach
    </ul>
    @endif
  @stop
