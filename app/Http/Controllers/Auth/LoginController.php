<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
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

    public function loginNisnForm(Request $request)
    {
        // hardcode untuk pengecekkan apakah sudah login 
        if (session()->has(['id', 'nisn', '_token'])) return redirect()->route('calon-siswa.index');

        return $request->has(['nisn', '_token']) ? $this->loginWithNisn(app(NisnRequest::class)) 
                                                  : view('auth.login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login.nisn')->withMessage('Logout Berhasil!');
    }

    public function loginWithNisn(NisnRequest $request)
    {
        $result = $request->validated();

        $calonSiswa = CalonSiswa::where(['nisn' => $request->nisn])->first();

        if ($calonSiswa)
        {
            // Login Successfully
            // set session 
            session([
                'id'        => $calonSiswa->id,
                'role_id'   => 1,
                'nisn'      => $calonSiswa->nisn,
            ]);
            return redirect()->route('calon-siswa.index')->withMessage('Login berhasil!');
        }else{
            // Fails to login
            return back()->withError('Nisn tidak ditemukan!'); 
        }
    }
}
