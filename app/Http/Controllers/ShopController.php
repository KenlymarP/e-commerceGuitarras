<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;


class ShopController extends Controller
{
    public function index ()
    {
      $guitarrad=Guitar::all();
      return view('guitars.index', ['guitarrad'=>$guitarrad]);
    }

    public function show($guitarrad)
    {
      $guitarrad=Guitar::find($guitarrad);
      return view('guitars.show', ['guitarrad'=>$guitarrad]);
    }
}