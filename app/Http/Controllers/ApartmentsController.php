<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Apartment;


class ApartmentsController extends Controller
{
  public function getApartments(){
    $apartments = Apartment::all();
    return view('apartments', array('apartments' => $apartments));
  }

  public function showApartment($id)
  {
    $apartment = Apartment::find($id);
    return view('apartment', array('apartment' => $apartment));
  }
}
