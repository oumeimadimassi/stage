<?php

namespace App\Http\Controllers;
use App\Models\Service; 
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // Method to store a new service
    public function add(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new service
         $service = new Service();
         $service->title = $request->title;
         $service->description = $request->description;
         $service->save() ;
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service added successfully');
    }
   
    public function affiche()
    {
        $services = Service::all(); // Récupérer tous les services depuis la base de données
        
        return view('admin', compact('services'));
    }

    public function edit_service($id)
    {
        $services= Service::find($id);
        return view('edit_service' , compact('services'));
    }

    public function update_service(Request $request,$id)
    {
        
        $services = Service::find($id);
        if (!$services) {
            return redirect('/admin')->with('error', "Service not found");
        }
    
        $services->title = $request->input('title');
        $services->description = $request->input('description');
        $services->update();
        return redirect('/admin/service')->with('status',"Data update sucsses");
    }

    public function delete_service($id){
        $services = Service::find($id);
        $services->delete();
        return redirect('/admin/service')->with('status',"Data delete sucsses");
    }

    public function affiche_ser()
    {
        $services = Service::all(); // Fetch all services from the database
        return view('service', ['services' => $services]); // Pass $services to the 'service' view
    }
    


}
