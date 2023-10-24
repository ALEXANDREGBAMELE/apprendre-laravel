<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = '_produit';
    protected $fillable = ['libelle', 'describe', 'price'];
    protected $primaryKey = 'id';
}