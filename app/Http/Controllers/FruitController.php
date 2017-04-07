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
    // list all fruits
    $fruits = Fruit::all();
    return Response::json($fruits);
  }

  public function create (Request $request)
  {
    // create new fruit
    Fruit::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    // show the info of a single fruit
    $fruit = Fruit::find($id);
    return Response::json($fruit);
  }

  public function update (Request $request, $id)
  {
    // update the info of a single fruit
    $fruit = Fruit::find($id);
    $success->update($request->all());
    return Response::json(['updated' => success]);
  }

  public function destroy ($id)
  {
    // delete a single fruit
    $fruit = Fruit::find($id);
    $fruit->delete();
    return Response::json(['deleted' => true]);
  }
}
