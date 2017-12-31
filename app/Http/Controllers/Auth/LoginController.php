<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function viewLogin(){
        return view('admin.login');
    }

    public function postLogin(Request $request){
        //validasi data input
        $this->validate($request,[
            'username' => 'required|min:8|max:32',
            'password' => 'required|min:8|max:32'
        ]);

        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password],true)) {

            Auth::login(Auth::user(), true);

            // print user information
            // print_r(Auth::user());
            // if successful, then redirect to their intended location
            return redirect('administrator');
        }else{
             return redirect('login')->with('aksesmasuk', 'Username atau Password Anda Salah !');
          // if unsuccessful, then redirect back to the login with the form data
        }
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');

        // return 'berhasil keluar';
    }
}
