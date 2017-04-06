<?php

namespace App\Http\Controllers;


use App\Unitedstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UnitedstateController extends Controller
{
  public function index ()
  {
    $unitedstates = Unitedstate::all();
    return Response::json($unitedstates);
  }

}
