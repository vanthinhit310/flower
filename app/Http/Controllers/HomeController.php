<?php

namespace App\Http\Controllers;

use App\Model\Slider;

class HomeController extends Controller
{
  //
  public function index()
  {
    $data = [];
    $data['sliders'] = Slider::all();
    return view('page.index', $data);
  }

}
