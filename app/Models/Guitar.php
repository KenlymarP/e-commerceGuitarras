<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;
    protected $table = 'guitars';
    protected $fillable=[
      'nombre',
      'marca',
      'modelo',
      'categories_id',
      'color',
      'imagen',
      'stock',
      'precio'
    ];
    protected $with = [
        'categories',
        
    ];

    public function categories()
    {
       return $this->belongsTo(Categories::class);
    }
    
}