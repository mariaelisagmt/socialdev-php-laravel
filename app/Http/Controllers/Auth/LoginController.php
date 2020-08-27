<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Usuario;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        //$input = $request->all();
        //dd($request->all());
        /*
        $input = [
            'usr_codigo' => $request->usr_codigo,
            'usr_senha' =>  $request->usr_senha
        ];
        dd($input);

        //$fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $attempt = Auth::attempt([
            'usr_codigo' => $request->usr_codigo,
            'usr_senha' =>  $request->usr_senha
        ]);
        dd($attempt);
        //dd(Hash::check($request->usr_senha, $usr));
        /*
        if(Auth::attempt($input))
        {
            return redirect()->route('home');
        }else{
            return 'erro';
        }*/

        $usuario = Usuario::find($request->usr_codigo);
        //dd($usuario->usr_senha);
        $senha = Hash::check($request->usr_senha, $usuario->usr_senha);
        //dd($senha);
        if($senha){
            Auth::login($usuario);
            return redirect()->route('home');
        }
    }

    public function extra(){
        return view('welcome');
    }
}


/*
$2y$10$dXxOQg6CvPqDxJMD7TmZ0OtMCdSpFAX/3uc2jjIadAfjHS.NW/HsG
$2y$10$ug88EPiPjTzjJRTKJNV7lOaLI3QgI0WNl5bE0NZ5ojERDtp9/mDP6
$2y$10$q/OLInWZgqtQTO66IdaJIO5aUuMz6q.m/cYmuKvhZf1YQV3ts46JO



$2y$10$GJExTcrkOFzRCJMjYhIBiOnjOIA25CUxYEenRuvxC/7tx.Ystd9kS

*/
