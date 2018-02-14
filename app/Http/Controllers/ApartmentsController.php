<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ApartmentsController extends Controller
{
  public function getApartments(){
    $apartments = array('apartment 1', 'apartment 2', 'apartment 3', 'apartment 4', 'apartment 5');
    $output = '<h1>qqq</h1>';
    $output .= '<ul>';
    foreach ($apartments as $key => $apartment) {
      $output .= '<li><a href="">'.$apartment.'</a></li>';
    }
    $output .= '</ul>';

    return $output;
  }
}
