<?php

namespace App\Http\Controllers;


use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class StateController extends Controller
{
  public function index ()
  {
    $states = State::all();
    return Response::json($states);
  }

}
