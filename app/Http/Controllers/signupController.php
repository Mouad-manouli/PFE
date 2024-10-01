<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Entreprise;

class signupController extends Controller
{
    public function stepOne(){
        return view('connection.signup1'); 
    }

    public function postStepOne(Request $request)
    {
        $request->validate([
            'Nom_ent' => 'required|string|max:255',
            'Tel_ent' => 'required|string|max:255',
            'Ville_ent' => 'required|string|max:255',
            'AdrPhysique_ent' => 'required|string|max:255',
        ]);

        $request->session()->put('step_one', $request->only('Nom_ent', 'Tel_ent', 'Ville_ent', 'AdrPhysique_ent'));
        return redirect()->route('entreprise.step_two');
    }

    public function stepTwo(){
        return view('connection.signup2');
    }

    public function postStepTwo(Request $request)
    {
        $validation= $request->validate([
            'SecteurActivite_ent' => 'required|string|max:255',
            'Description_ent' => 'required|string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('company', 'public');
            $request->session()->put('step_two.image', $path);
        }

        session()->put('image',session('step_two.image'));

        $request->session()->put('step_two', $request->only('SecteurActivite_ent', 'Description_ent'));

        return redirect()->route('entreprise.step_three');
    }

    public function stepThree(){
        return view('connection.signup3');
    }


    public function postStepThree(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:entreprises,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $stepOneData = $request->session()->get('step_one');
        $stepTwoData = $request->session()->get('step_two');
        
        if ($request->session()->has('image')) {
            $stepTwoData['image'] = session('image');
        }

        $data = array_merge(
            $stepOneData,
            $stepTwoData,
            $request->only('email', 'password')
        );

        $data['password'] = Hash::make($data['password']);
        Entreprise::create($data);

        $request->session()->forget(['step_one', 'step_two']);

        return redirect('/login')->with('success','The account has been created successfully.');
    } 


    public function edit_compte_company(Entreprise $Entreprise){
        return view('profile.profile_company_update',compact('Entreprise'));
    }

    public function update_compte_company(request $request , Entreprise $Entreprise){
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
        return redirect('profile/company')->with('success','The profile well modify');
    }


   

}
