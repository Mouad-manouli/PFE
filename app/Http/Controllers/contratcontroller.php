<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;

class contratcontroller extends Controller
{
    public function company_contrat(){
        $company=session('info_entr');

        $contrat = Contrat::where('entreprise_id' , $company->id)->count();
        return view('contrat.create_contrat',compact('company','contrat'));
    }

    public function valide_contrat(request $request){

        $request->validate([
            'DateDebut_cnt'=>'required|date',
            'DateFin_cnt'=>'required|date|after_or_equal:DateDebut_cnt',
            'DateControle_cnt'=>'required',
        ]);

        $request->session()->put('valide_contrat', $request->only('DateDebut_cnt', 'DateFin_cnt', 'DateControle_cnt'));
        
        
        return redirect()->route('payment');   
    }
}
