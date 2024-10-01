<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Employé;
use App\Models\Entreprise;


class connexioncontroller extends Controller
{
    public function index(){
        return view('connection.login');
    }

    public function login(Request $request){
        $email =$request->email;
        $password =$request->password;
        $credentials =['email'=>$email,'password'=> $password];

        $employe = Employé::where('email', $email)->first();
        if($employe){
            session()->put('info_emp',$employe);
        }
        
        $entreprise = Entreprise::where('email', $email)->first();
        if($entreprise){
            session()->put('info_entr',$entreprise); 
        }
        

       if(Auth::guard('admins')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('list_company');
       }
       elseif(Auth::guard('entreprises')->attempt($credentials)){
            $request->session()->regenerate();
            session()->put('token_company',$credentials);
            return redirect()->intended();
    }
    
       elseif(Auth::guard('employés')->attempt($credentials)){
            $request->session()->regenerate();
            session()->put('token_employee',$credentials);
            return redirect()->intended();
    }
       else{
            return back()->withErrors([
                'email'=>'The email is incorrect',
                'password'=>'The password is incorrect'
            ]);
       }
    }
}
