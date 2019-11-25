<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\NisnLoginRequest as NisnRequest;
use App\CalonSiswa;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |----------------------------   ----------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function redirectTo()
    {
        return redirect()->route('home')->withMessage('Login Berhasil');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginNisnForm()
    {
        if (request()->has(['nisn', '_token']))
        {
            $this->loginWithNisn(app(NisnRequest::class));
        }

        return view('auth.login');
    }

    public function loginWithNisn(NisnRequest $request)
    {
        $result = $request->validate([
            'nisn' => 'required|numeric'
        ]);

        $calonSiswa = CalonSiswa::where(['nisn' => $request->nisn])->first();

        if ($calonSiswa)
        {
            // Login Successfully
        }else{
            // Fails to login 
        }
    }
}
