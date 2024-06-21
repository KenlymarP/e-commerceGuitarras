<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offers;
use App\Models\Categories;
use App\Models\Guitar;


class ShopController extends Controller
{
    
    public function index($categoryId = null)
    {
      $ofertad=Offers::all();
      $categories=Categories::all();
      $categoryName = null;      
      if ($categoryId) {
        // Filtrar productos por categorías seleccionadas
        $guitarrad = Guitar::where('categories_id', $categoryId)->get();
        $category = Categories::find($categoryId);
        if ($category) {
            $categoryName = $category->nombre;
        }
    } else {
        $guitarrad = Guitar::all();
    }
    

    return view('guitars.index', [
        'ofertad' => $ofertad,
        'categories' => $categories,
        'guitarrad' => $guitarrad,
        'categoryName' => $categoryName, // Pasa el nombre de la categoría a la vista
    ]);
  }


    
    

    
}