<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Skills;
use App\Models\About;
use App\Models\Education;



class UserController extends Controller
{
    
   
    public function getUser()
    {
        // Récupérer l'utilisateur depuis la base de données (par exemple, le premier utilisateur)
        $user = User::first();

        // Renvoyer les données de l'utilisateur sous forme de JSON
        return response()->json($user);
    }

    public function show()
    {
        $services = Service::all();
        $skills = Skills::all();
        $about = About::first();
        $educations = Education::all();
        return view('welcome', compact( 'services', 'skills','about','educations'));

    }

    public function index(){
        return view('welcome');
    }

    public function create(Request $request){
        
    }

   
}
