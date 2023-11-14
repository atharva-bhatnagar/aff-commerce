<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    public function register(Request $request){

        $data=$request->validate([
            'name'=>['required','min:1'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','min:6']
        ]);
        $user=User::create($data);
        auth()->login($user);
        return redirect('/');
    }
    public function login(Request $request){

        $data=$request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);
        $r='/login';
        if(auth()->attempt(['email'=>$data['email'],'password'=>$data['password']])){
            $request->session()->regenerate();
            $r='/profile';
            
        }else{
            echo "<script>alert('wrong username or password!')</script>";
        }
        
        return redirect($r);
        
    }
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
