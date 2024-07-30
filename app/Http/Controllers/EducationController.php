<?php

namespace App\Http\Controllers;
use App\Models\Education; 
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function add_education(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new service
         $education = new Education();
         $education->name = $request->name;
         $education->date = $request->date; 
         $education->description = $request->description;
         $education->save() ;
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service added successfully');
    }

    public function affiche_education()
    {
        $educations = Education::all(); // Récupérer tous les services depuis la base de données
        return view('education',  ['educations' => $educations]);
    }

    public function edit_education($id)
    {
        $educations= Education::find($id);
        return view('edit_education' , ['educations' => $educations]);
    }

    public function update_education(Request $request,$id)
    {
        
        $educations = Education::find($id);
        if (!$educations) {
            return redirect('/admin')->with('error', "Service not found");
        }
        $educations->name = $request->input('name');
        $educations->date = $request->input('date'); 
        $educations->description = $request->input('description');
       
        $educations->update();
        
        return redirect('/admin/education')->with('status',"Data update sucsses");
    }

    public function delete_education($id){
        $educations = Education::find($id);
        $educations->delete();
        return redirect('/admin/education')->with('status',"Data delete sucsses");
    }

}
