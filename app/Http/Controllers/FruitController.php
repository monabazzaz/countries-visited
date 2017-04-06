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

  public function create (Request $request)
  {
    Fruit::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    $fruit = Fruit::find($id);
    return Response::json($fruit);
  }

  public function update (Request $request, $id)
  {
    $fruit = Fruit::find($id);
    $success->update($request->all());
    return Response::json(['updated' => success]);
  }

  public function destroy ($id)
  {
    $fruit = Fruit::find($id);
    $fruit->delete();
    return Response::json(['deleted' => true]);
  }
}
