<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Service;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ServicesController;
use App\Models\Education;
use App\Models\About;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Models\Skills;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Http\Controllers\PDFController;




Route::get('/oumaima', function () {
    return view('oumaima');
});



Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin', [HomePageController::class, 'portfolio']);


Route::get('/', [UserController::class, 'show']);



//Services Routes
Route::post('/admin/services', [ServicesController::class, 'add']);

Route::get('/admin/edit-service/{id}', [ServicesController::class, 'edit_service']);

Route::put('/admin/edit-service/{id}',  [ServicesController::class ,'update_service' ]);

Route::get('/admin/delete-service/{id}', [ServicesController::class, 'delete_service']);

Route::get('/admin/service', [ServicesController::class, 'affiche_ser']);

//Education Routes
Route::get('/admin/education', function () {
    return view('education');
});
Route::post('/admin/add-education', [EducationController::class, 'add_education']);
Route::get('/admin/education', [EducationController::class, 'affiche_education']);

Route::get('/admin/edit-education/{id}', [EducationController::class, 'edit_education']);

Route::put('/admin/edit-education/{id}', [EducationController::class, 'update_education']);

Route::get('/admin/delete-education/{id}', [EducationController::class, 'delete_education']);


//About Routes


Route::get('/admin/about', [AboutController::class, 'affiche_about']);
Route::delete('/admin/about', [AboutController::class, 'destroy']);



//Skills Routes
Route::get('/admin/skills', function () {
    return view('skills_tech');
});

Route::post('/admin/skills', [SkillsController::class, 'add_skills']);

Route::get('/admin/skills', [SkillsController::class, 'affiche_skill_Tech']);

Route::get('/admin/delete-skills/{id}', [SkillsController::class, 'delete_skills']);

Route::get('/admin/edit-skills/{id}', [SkillsController::class, 'edit_skills']);

Route::put('/admin/edit-skills/{id}', [SkillsController::class, 'update_skills']);


//Routes CONTACT

Route::get('/admin/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'contact_post']);


//

Route::get('/pdf_generator', [App\Http\Controllers\PDFController::class, 'pdf_generator_get']);