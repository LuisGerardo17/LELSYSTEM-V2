<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create() {
         

         return view('auth.register');

}

 
    public function store(){
      
        $this->validate(request(),[
          'username'=>'required',
          'email'=>'required|email',
          'password'=>'required|confirmed'
          ]);
        
        $user = User::create(request(['username','email','password']));
        auth()->login($user);
        return redirect()->to('administrador.admin');
    }
}




