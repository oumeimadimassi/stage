<?php

namespace App\Http\Controllers;
use App\Models\About; 

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function affiche_about()
    {
        $about = About::first(); // Récupérer tous les services depuis la base de données
        return view('about',  ['about' => $about]);
    }

    public function destroy()
    {
        $about = About::first();
        $about->delete();

        return redirect('/admin/about')->with('status',"Data delete sucsses");
    }


}
