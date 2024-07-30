<?php

namespace App\Http\Controllers;
use App\Models\About; 
use App\Models\Skills; 
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf as PDF;

use App\Models\Service; 
use App\Models\Education; 





class PDFController extends Controller
{
    public function pdf_generator_get(Request $request){

        // Récupération des données depuis les modèles
        $data = [
            'services' => Service::all(),
            'educations' => Education::all(),
            'skills' => Skills::all(),
            'about' => About::first(),
        ];
        $pdf = PDF::loadView('portfolio', $data);
        $filePath = public_path('pdfs/portfolio.pdf'); // Store the PDF in public/pdfs folder
        $pdf->save($filePath);
        return response()->download($filePath, 'portfolio.pdf'); // Download the file as portfolio.pdf
    }

   
}
