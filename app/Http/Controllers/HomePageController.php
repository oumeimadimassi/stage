<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About; 


class HomePageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function portfolio()
    {
        $about = About::first(); // Récupérer tous les services depuis la base de données
        return view('admin', compact( 'about'));
    }
    
   
    
}
