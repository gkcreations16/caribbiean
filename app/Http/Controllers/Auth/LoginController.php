<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

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

    //protected $redirectTo = '/';
    protected function redirectTo()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            return '/admin/dashboard';
        } else {
            return '/user/dashboard';
        }
    }

    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */

    ///Google 
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */

    ///Google  redirect
    public function handleGoogleCallback()
    {
        // $user = Socialite::driver('google')->stateless()->user();
        $user = Socialite::driver('google')->user();

        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            Auth::login($authUser);
            return redirect()->route('home');
        } else {
            $newUser = new User();
            $newUser->email = $user->email;
            $newUser->name = $user->name;
            $newUser->userid = $user->id;
            $newUser->password = uniqid();
            $newUser->save();

            //login 
            Auth::login($newUser);
            //return redirect()->route('home');
        }
    }




    ///FACEBOOK 
    public function redirectToFACEBOOK()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */

    ///FACEBOOK  redirect
    public function handleFACEBOOKCallback()
    {
        // $user = Socialite::driver('google')->stateless()->user();
        $fbuser = Socialite::driver('facebook')->user();

        $authFbUser = User::where('email', $fbuser->email)->first();
        if ($authFbUser) {
            Auth::login($authFbUser);
            return redirect()->route('home');
        } else {
            $newFBUser = new User();
            $newFBUser->email = $fbuser->email;
            $newFBUser->name = $fbuser->name;
            $newFBUser->userid = $fbuser->id;
            $newFBUser->password = uniqid();
            $newFBUser->save();

            //login 
            Auth::login($newFBUser);
            //return redirect()->route('home');
        }
    }
}
