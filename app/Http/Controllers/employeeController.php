<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employé;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {   
        $search = $request->search;
        if ($search) {
            $employees = Employé::where('Nom_emp', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $employees=Employé::all();
        }

        $currentDate = Carbon::now();
        
        return view('crud.employee.list_employee',compact('employees','currentDate')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Crud.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatempl = $request->validate([
            'Nom_emp' => 'required|string|max:255',
            'Sexe' => 'required|string|in:Male,Female', 
            'Age' => 'required|integer|min:18|max:65', 
            'Tel' => 'required|string|max:10',
            'Ville' => 'required|string|max:255',
            'AdrPhysique_emp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employés,email',
            'Type_emp' => 'required|string|max:255',
            'Specialite_emp' => 'required|string|max:255',
            'password' => 'required|min:8', 
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
        ]);

        $validatempl['password']=Hash::make($request->password);

        if ($request->hasFile('image')) {
            $validatempl['image'] = $request->file('image')->store('employee', 'public'); 
        }   

        

        Employé::create($validatempl);
        return redirect()->route('list_employee')->with('success','Employee profile successfully created. ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employé $Employé)
    {
        return view('Crud.employee.show',compact('Employé'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employé $Employé)
    {
        return view('Crud.employee.update',compact('Employé'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Employé $Employé)
    {
        $validatempl = $request->validate([
            'Nom_emp' => 'required|string|max:255',
            'Sexe' => 'required|string|in:Male,Female', 
            'Age' => 'required|integer|min:18|max:65', 
            'Tel' => 'required|string|max:10',
            'Ville' => 'required|string|max:255',
            'AdrPhysique_emp' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'Type_emp' => 'required|string|max:255',
            'Specialite_emp' => 'required|string|max:255',
            'password' => 'required|min:8', 
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
        ]);

        $validatempl['password']=Hash::make($request->password);

        if ($request->hasFile('image')) {
            $validatempl['image'] = $request->file('image')->store('employee', 'public'); 
        }      

        $Employé->update($validatempl);
        return redirect()->route('list_employee')->with('success','Employee information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Employé $Employé)
    {
        $Employé->delete();
        return redirect()->route('list_employee')->with('success','Employee deleted from records.');
    }
}
