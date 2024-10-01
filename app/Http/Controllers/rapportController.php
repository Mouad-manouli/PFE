<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\Rapport;
use App\Models\Employé;
use Illuminate\Support\Facades\Session;


class rapportController extends Controller
{
    public function create(Employé $Employé){
        $entreprise=Entreprise::all();

        session()->put('id_emp', $Employé->id);
        session()->forget('materiels');
        session()->forget('id_m');


        return view('rapport.create_rapport',compact('entreprise'));
    }

    public function store_step1(Request $request ){

        $request->validate([
            'entreprise_id' => 'required|exists:entreprises,id',
        ]);

        $entr=$request->entreprise_id;

        
        session()->put('entreprise' ,$entr);
        $machines=Entreprise::find($entr)->machines;


        foreach ($machines as $machine) {
            $materiel = $machine->Materiel;
        }
        $materiels = $machines->pluck('Materiel');

        foreach ($machines as $machine) {
            $id_m = $machine->id;
        }
        $id_m = $machines->pluck('id');

        session()->put('materiels' , $materiels);
        session()->put('id_m' , $id_m);

        return redirect('/rapport/create');
        
    }

    public function store_step2(Request $request ){

         $request->validate([
            'DateDebut' => 'required|date',
            'DateFin' => 'required|date|after_or_equal:DateDebut',
            'Etat_machine' => 'required|string|max:255',
            'Description' => 'required|string',
            'machine_id' => 'required|exists:machines,id',
        ]);

        
        Rapport::create([
            'DateDebut' => $request->DateDebut,
            'DateFin' => $request->DateFin,
            'Etat_machine' => $request->Etat_machine,
            'Description' => $request->Description,
            'machine_id' => $request->machine_id,
            'entreprise_id' => session('entreprise'),
            'employé_id' => session('id_emp')
        ]);

        session()->forget('entreprise');
        session()->forget('id_emp');
        session()->forget('materiels');
        session()->forget('id_m');
        // Optionally, you can return a response
        return redirect('/profile/employee')->with('success','Well created report');

    }



    

    public function edit1(Rapport $Rapport){
        $entreprise = Entreprise::all();
        session()->forget('materiels');
        session()->forget('id_m');  
        return view('rapport.update_rapport', compact('entreprise', 'Rapport'));
    }
    
    public function update1(Request $request, Rapport $Rapport){
        $request->validate([
            'entreprise_id' => 'required|exists:entreprises,id',
        ]);
    
        $entr = $request->entreprise_id;
        session()->put('entreprise', $entr);
    
        $machines = Entreprise::find($entr)->machines;
        $materiels = $machines->pluck('Materiel');
        $id_m = $machines->pluck('id');
    
        session()->put('materiels', $materiels);
        session()->put('id_m', $id_m);
    
        return redirect('/rapport/edit2/'.$Rapport->id);
    }
    
    public function edit2(Rapport $Rapport){
        $entreprise = Entreprise::all();
        return view('rapport.update_rapport', compact('entreprise', 'Rapport'));
    }
    
    public function update2(Request $request, Rapport $Rapport){
        $rapportdata = $request->validate([
            'DateDebut' => 'required|date',
            'DateFin' => 'required|date|after_or_equal:DateDebut',
            'Etat_machine' => 'required|string|max:255',
            'Description' => 'required|string',
            'machine_id' => 'required|exists:machines,id',
        ]);
    
        $Rapport->update($rapportdata);
    
        session()->forget('entreprise');
        session()->forget('id_emp');
        session()->forget('materiels');
        session()->forget('id_m');
    
        return redirect('/profile/employee')->with('success','report well edit');
    }
    

    
}
