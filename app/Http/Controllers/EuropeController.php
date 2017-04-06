<?php

namespace App\Http\Controllers;

use App\Europe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class EuropeController extends Controller
{
  $europes = Europe::all();
  return Response::json($europe);
}
