<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class CountryController extends Controller
{
  public function index ()
  {
    $countries = Country::all();
    return Response::json($countries);
  }

}
