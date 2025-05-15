<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Déclaration des champs que tu peux remplir en masse (Mass Assignment)
    protected $fillable = ['name', 'email', 'password'];

    // Tu peux ajouter des règles supplémentaires ici si nécessaire, comme des relations
}
