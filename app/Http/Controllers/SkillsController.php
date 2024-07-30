<?php

namespace App\Http\Controllers;
use App\Models\Skills; 
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        return view('skills_tech');
    }


    //Fonctions Techniques


    public function add_skills(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:255',
        ]);

        $skill = new Skills();
        $skill->name = $validatedData['name'];
        $skill->percentage = $validatedData['percentage'];
        $skill->category = $validatedData['category'];

        $skill->save();

        return redirect()->back()->with('success', 'Service added successfully');
    }

    public function affiche_skill_Tech()
    {
        $skills = Skills::all(); // Récupérer tous les services depuis la base de données
        return view('skills_tech',  ['skills' => $skills]);
    }

    public function delete_skills($id)
    {
        $skill = Skills::findOrFail($id);
        $skill->delete();

        return redirect()->back()->with('success', 'Service added successfully');
    }

    public function edit_skills($id)
    {
        $skills= Skills::find($id);
        return view('edit_skill_tech' ,['skills' => $skills]);
    }

    public function update_skills(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|between:0,100',
            'category' => 'required|string|max:255',

        ]);

        $skill = Skills::findOrFail($id);
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->category = $request->category;
        $skill->save();

        return redirect('/admin/skills')->with('success', 'Skill updated successfully');
    }




   
}
