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

  public function create (Request $request)
  {
    Country::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    $country = Country::find($id);
    return Response::json($country);
  }

  public function update (Request $request, $id)
  {
    $country = Country::find($id);
    $success->update($request->all());
    return Response::json(['updated' => success]);
  }

  public function destroy ($id)
  {
    $country = Country::find($id);
    $country->delete();
    return Response::json(['deleted' => true]);
  }
}
