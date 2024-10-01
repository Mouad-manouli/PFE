<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\Employé;
use App\Models\Machine;
use App\Models\Rapport;
use App\Models\Contrat;


class ProfileCEController extends Controller
{
    public function index_company(){
        $company=session('info_entr');

        $machines = Machine::where('entreprise_id' , $company->id)->get();
        $contrat = Contrat::where('entreprise_id' , $company->id)->count();

        return view('profile.profile_company',compact('company','machines','contrat'));
    }

    
    
    public function company_report()
{
    $company = session('info_entr');
    $rapports = Rapport::where('entreprise_id', $company->id)->get();

    // Create an associative array to store the machine names by rapport ID
    $machines_nom = [];

    foreach ($rapports as $rapport) {
        $machine = $rapport->machine; // Using the machine relationship
        if ($machine) {
            $machines_nom[$rapport->id] = $machine->Materiel; // Assuming 'Materiel' is a property of the Machine model
        } else {
            $machines_nom[$rapport->id] = 'No machine available'; // Default message if no machine is found
        }
    }
    $contrat = Contrat::where('entreprise_id' , $company->id)->count();

    return view('rapport.afficher_rapport', compact('rapports', 'company', 'machines_nom','contrat'));
}



























    

    public function index_employee(){ 
        $employee=session('info_emp');
        $rapport=$employee->rapport;

        $entreprises = $rapport->map(function($rap) {
            return $rap->entreprise->Nom_ent;
        });

        $machine = $rapport->map(function($rap) {
            return $rap->machine->Materiel;
        });

        return view('profile.profile_employee',compact('employee','rapport','entreprises','machine'));
    }

    public function edit_emp(Employé $Employé ){
        return view('profile.profile_emp_update',compact('Employé'));
    }

    public function update_emp(Employé $Employé ,Request $request){
        $validatempl = $request->validate([
            'Nom_emp' => 'required|string|max:255',
            'Age' => 'required|integer|min:18|max:65', 
            'Tel' => 'required|string|max:10',
            'Ville' => 'required|string|max:255',
            'AdrPhysique_emp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
        ]);


        if ($request->hasFile('image')) {
            $validatempl['image'] = $request->file('image')->store('employee', 'public'); 
        }      

        $Employé->update($validatempl);
        return redirect('/profile/employee')->with('success','The profile well modify');
    }
}
