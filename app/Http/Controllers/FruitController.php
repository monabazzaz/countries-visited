<?php

namespace App\Http\Controllers;


use App\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class FruitController extends Controller
{
  public function index ()
  {
    $fruits = Fruit::all();
    return Response::json($fruits);
  }
}
