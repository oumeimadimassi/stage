<?php

namespace App\Http\Controllers;
use App\Models\Contact; 
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        // Récupérer tous les contacts ou filtrer selon la recherche
        $search = $request->input('search');
        
        if ($search) {
            $contacts = Contact::where('full_name', 'like', "%{$search}%")->get();
        } else {
            $contacts = Contact::all();
        }
        
        // Retourner la vue avec les contacts
        return view('contact', compact('contacts'));
    }

    public function contact_post(Request $req){
      // Valider les données du formulaire
      $validatedData = $req->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|numeric',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Créer un nouveau contact
    Contact::create($validatedData);
      // Calculer le nombre total de contacts
      $totalContacts = Contact::count();
    // Rediriger ou retourner une réponse
    return redirect()->back()->with('success', 'Contact added successfully!');
    }
}
