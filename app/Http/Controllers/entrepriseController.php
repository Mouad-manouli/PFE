<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class entrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {   

        $search = $request->search;
        if ($search) {
            $entreprises = Entreprise::where('Nom_ent', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $entreprises = Entreprise::all();
        }
        $currentDate = Carbon::now();
        return view('crud.company.list_company',compact('entreprises','currentDate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'Nom_ent' => 'required|string|max:255',
        'Tel_ent' => 'required|string|max:10',
        'Ville_ent' => 'required|string|max:255',
        'AdrPhysique_ent' => 'required|string|max:255',
        'SecteurActivite_ent' => 'required',
        'Description_ent' => 'required|string|max:280',
        'email' => 'required|email|unique:entreprises,email|max:255',
        'password' => 'required|string|min:8',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $validatedData['password'] = bcrypt($validatedData['password']);

    if ($request->hasFile('image')) {
        $validatedData['image'] = $request->file('image')->store('company', 'public');
    }
   
    $entr = Entreprise::create($validatedData);

    session()->put('idEntr', $entr->id);
    session()->put('Nom_ent', $entr->Nom_ent);
    session()->put('success', 'Company profile successfully created.');

    return view('crud.machine.create');
}


    /**
     * Display the specified resource.
     */
    public function show(Entreprise $Entreprise)
    {
        $machines = $Entreprise->machines;
        return view('crud.company.show',compact('machines','Entreprise')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $Entreprise)
    {
        return view('Crud.company.update',compact('Entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Entreprise $Entreprise)
    {
        $validatedData = $request->validate([
            'Nom_ent' => 'required|string|max:255',
            'Tel_ent' => 'required|string|max:10',
            'Ville_ent' => 'required|string|max:255',
            'AdrPhysique_ent' => 'required|string|max:255',
            'SecteurActivite_ent' => 'required',
            'Description_ent' => 'required|string|max:280',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('company', 'public'); 
        }

        $Entreprise->update($validatedData);
        return redirect()->route('list_company')->with('success','Company information updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $entreprise = Entreprise::findOrFail($id);
    
    $entreprise->machines()->delete();
    
    $entreprise->delete();
    
    return redirect()->route('list_company')->with('success','Company deleted from records.');
}

}
