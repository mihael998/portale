<?php
use App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $redirectTo="/strutture";
    public function showLoginForm(){

        return view("pages.auth.login");
    }
    public function __construct(){
        $this->middleware('guest')->except("logout");
    }

    public function logout(Request $request){
        auth()->logout();
        return redirect()->to("login");
    }

    public function login(Request $request){
        $this->validate($request,[
            "codice" =>'required',
            "password"=>"required"
        ]);

        if (auth()->attempt(['id' => $request->input("codice"), 'password' => $request->input("password"), 'abilitato' => 1])) {
            if(auth()->user()->admin!=1)
            $this->redirectTo="/strutture/".auth()->user()->strutture()->first()->id;
            
            return redirect()->intended($this->redirectTo);

        }
    }
}
