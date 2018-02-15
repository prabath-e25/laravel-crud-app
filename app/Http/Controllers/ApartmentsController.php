<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Apartment;

use App\Console\Commands\storeApartmentsCommand;

class ApartmentsController extends Controller
{
  public function getApartments()
  {
    $apartments = Apartment::all();
    $title = 'Apartments';
    return view('apartments', array('apartments' => $apartments, 'title' => $title ));
  }

  public function showApartment($id)
  {
    $apartment = Apartment::find($id);
    return view('apartment', array('apartment' => $apartment));
  }

  public function addApartments()
  {
    return view('create');
  }

  public function store(Request $request)
  {
    $name = $request->input('name');
    $address = $request->input('address');
    $no_of_rooms = $request->input('no_of_rooms');

    $command = new storeApartmentsCommand($name,$address,$no_of_rooms);
    $this->dispatch($command);

    // return \Redirect::route('Apartment.getApartments')
    return redirect('./apartments')
            ->with('message','added new');
  }
}
