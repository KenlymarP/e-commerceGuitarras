<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;

class GuitarController extends Controller
{
    
    public function show($guitarrad)
    {
      $guitarrad=Guitar::find($guitarrad);
      $nombreCategoria = $guitarrad->categories->nombre;
      return view('guitars.show', ['guitarrad'=>$guitarrad, 'nombreCategoria'=>$nombreCategoria]);
    }
}