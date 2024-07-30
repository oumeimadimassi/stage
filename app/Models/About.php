<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['job', 'profil'];
    protected $table = 'about'; // Assurez-vous que le nom de la table est correct

}
