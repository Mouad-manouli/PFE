<?php

namespace App\Http\Controllers;
use App\Models\Machine;

use Illuminate\Http\Request;

class machinecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crud.machine.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.machine.create');
    }




    public function store(Request $request)
{
    $request->validate([
        'Materiel' => 'required|string|max:255',
        'Model' => 'required|string|max:255',
        'Etat' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
    ]);

    $entrepriseId = session()->get('id_en') ?? session('idEntr');
    
    if ($entrepriseId) {
        $machine = new Machine([
            'Materiel' => $request->Materiel,
            'Model' => $request->Model,
            'Etat' => $request->Etat,
            'entreprise_id' => $entrepriseId,
        ]);

        if ($request->hasFile('image')) {
            $machine->image = $request->file('image')->store('machine', 'public');
        }

        $machine->save();
        session()->put('success', 'Machine profile successfully created.');
    } else {
        session()->put('error', 'Failed to create machine profile. Company ID is missing.');
    }

    return view('crud.machine.create');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $Machine)
    {
        return view('crud.machine.update',compact('Machine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Machine $Machine )
    {
        $vaidatemachine=$request->validate([
            'Materiel' => 'required|string|max:255',
            'Model' => 'required|string|max:255',
            'Etat' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048', // Ensure image validation
        ]);

        if ($request->hasFile('image')) {
            $vaidatemachine["image"] = $request->file('image')->store('machine', 'public');
        }

        $Machine->update($vaidatemachine);
        return redirect()->route('list_company')->with('success','Machine information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $machine= Machine::find($id);
        $machine->delete();
        return redirect()->route('list_company')->with('success','Machine deleted from records.');
    }
















    

    public function index_u()
    {
        return view('machine.create_machine');
    }

    public function store_u(Request $request)
    {
        
        $request->validate([
            'Materiel' => 'required|string|max:255',
            'Model' => 'required|string|max:255',
            'Etat' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);
    

        $entrepriseId = session()->get('info_entr');
        
        if ($entrepriseId) {
            $machine = new Machine([
                'Materiel' => $request->Materiel,
                'Model' => $request->Model,
                'Etat' => $request->Etat,
                'entreprise_id' => $entrepriseId->id,
            ]);
    
            if ($request->hasFile('image')) {
                $machine->image = $request->file('image')->store('machine', 'public');
            }
    
            $machine->save();
            session()->put('success', 'Machine profile successfully created.');
        } else {
            session()->put('error', 'Failed to create machine profile. Company ID is missing.');
        }
    
        return redirect('/machine_u/create'); 
    }


    public function edit_u(Machine $Machine )
    {
        return view('machine.update_machine',compact('Machine'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update_u(Request $request,Machine $Machine )
    {
        $vaidatemachine=$request->validate([
            'Materiel' => 'required|string|max:255',
            'Model' => 'required|string|max:255',
            'Etat' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048', 
        ]);

        if ($request->hasFile('image')) {
            $vaidatemachine["image"] = $request->file('image')->store('machine', 'public');
        }

        $Machine->update($vaidatemachine);

        return redirect('/profile/company')->with('success','Machine well modify');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_u(string $id)
    {
        $machine= Machine::find($id);
        $machine->delete();
        return redirect('/profile/company');
    }



}
