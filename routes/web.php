<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\machinecontroller;
use App\Http\Controllers\connexioncontroller;
use App\Http\Controllers\logoutcontroller;
use App\Http\Controllers\signupController;
use App\Http\Controllers\ProfileCEController;
use App\Http\Controllers\rapportController;
use App\Http\Controllers\contratcontroller;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ContactController;

//home :
Route::get('/', [homecontroller::class , 'index']);


//company :
Route::get('/list_company',[entrepriseController::class , 'index'])->name('list_company');
Route::get('/Company/create',[entrepriseController::class , 'create']);
Route::post('/company/store',[entrepriseController::class , 'store'])->name('create.company');
Route::get('/company/destroy/{id}',[entrepriseController::class , 'destroy']);
Route::get('/comapny/edit/{Entreprise}',[entrepriseController::class , 'edit']);
Route::put('/comapny/update/{Entreprise}',[entrepriseController::class , 'update'])->name('update.company');
Route::get('/comapny/show/{Entreprise}',[entrepriseController::class , 'show']);



//machine_part_admin :
Route::get('/machine/create',[machinecontroller::class , 'index']);
Route::post('/machine/store',[machinecontroller::class , 'store'])->name('create.machine');
Route::get('/machine/destroy/{id}',[machinecontroller::class , 'destroy']);
Route::get('/machine/edit/{Machine}',[machinecontroller::class , 'edit']);
Route::put('/machine/update/{Machine}',[machinecontroller::class , 'update'])->name('update.machine');



//machine_part_utilisat:
Route::get('/machine_u/create',[machinecontroller::class , 'index_u']);
Route::post('/machine_u/store',[machinecontroller::class , 'store_u'])->name('create.machine_u');
Route::get('/machine_u/destroy/{id}',[machinecontroller::class , 'destroy_u']);
Route::get('/machine_u/edit/{Machine}',[machinecontroller::class , 'edit_u']);
Route::put('/machine_u/update/{Machine}',[machinecontroller::class , 'update_u'])->name('update.machine_u');
 


//employee :
Route::get('/list_employee',[employeeController::class , 'index'])->name('list_employee');
Route::get('/Employee/create',[employeeController::class , 'create']);
Route::post('/employee/store',[employeeController::class , 'store'])->name('create');
Route::get('/employee/destroy/{Employé}',[employeeController::class , 'destroy']);
Route::get('/employee/edit/{Employé}',[employeeController::class , 'edit']);
Route::put('/employee/update/{Employé}',[employeeController::class , 'update'])->name('update');
Route::get('/employee/show/{Employé}',[employeeController::class , 'show'])->name('show');



//login:
Route::get('/login',[connexioncontroller::class,'index']);
Route::post('/login',[connexioncontroller::class,'login'])->name('login');
    
//sign_up:
Route::get('entreprise/step-one', [signupController::class, 'stepOne'])->name('entreprise.step_one');
Route::post('entreprise/step-one', [signupController::class, 'postStepOne'])->name('entreprise.post_step_one');
Route::get('entreprise/step-two', [signupController::class, 'stepTwo'])->name('entreprise.step_two');
Route::post('entreprise/step-two', [signupController::class, 'postStepTwo'])->name('entreprise.post_step_two');
Route::get('entreprise/step-three', [signupController::class, 'stepThree'])->name('entreprise.step_three');
Route::post('entreprise/step-three', [signupController::class, 'postStepThree'])->name('entreprise.post_step_three');


//update_company:
Route::get('Company/edit_compte/{Entreprise}',[signupController::class, 'edit_compte_company']);
Route::put('Company/update_compte/{Entreprise}',[signupController::class, 'update_compte_company'])->name('update.compte.company');


//logout:
Route::post("/logout", [logoutcontroller::class, "logout"])->name("logout");
    
//profile_employee:
Route::get("/profile/employee", [ProfileCEController::class, "index_employee"]);
Route::get("/profile_emp/edit/{Employé}", [ProfileCEController::class, "edit_emp"]);
Route::put("/profile_emp/update/{Employé}", [ProfileCEController::class, "update_emp"])->name('profile_emp.update');


//profile_company:
Route::get("/profile/company", [ProfileCEController::class, "index_company"]);
Route::get("/profile/company_report", [ProfileCEController::class, "company_report"]);


//contrat:
Route::get("/profile/company_contrat", [contratcontroller::class, "company_contrat"]);
Route::post("/profile/valide_contrat", [contratcontroller::class, "valide_contrat"])->name('valide_contrat');


//rapport :
Route::get('/rapport/create/{Employé}',[rapportController::class , 'create']);
Route::post('/rapport/store_step1',[rapportController::class , 'store_step1'])->name('create.rapport_step1');
Route::get('/rapport/create',function(){return view('rapport.create_rapport'); });
Route::post('/rapport/store_step2',[rapportController::class , 'store_step2'])->name('create.rapport_step2');

Route::get('/rapport/edit1/{Rapport}', [rapportController::class, 'edit1']);
Route::put('/rapport/update1/{Rapport}', [rapportController::class, 'update1'])->name('update.rapport1');
Route::get('/rapport/edit2/{Rapport}', [rapportController::class, 'edit2']);
Route::put('/rapport/update2/{Rapport}', [rapportController::class, 'update2'])->name('update.rapport2');


//paypal :
Route::get('payment',[PaypalController::class , 'payment'])->name('payment');
Route::get('cancel',[PaypalController::class , 'cancel'])->name('payment.cancel');
Route::get('payment/success',[PaypalController::class , 'success'])->name('payment.success');



//contact :
Route::get('/emergency-contact', [App\Http\Controllers\ContactController::class, 'showForm']);


//about:
Route::get('/about', [App\Http\Controllers\ContactController::class, 'about']);