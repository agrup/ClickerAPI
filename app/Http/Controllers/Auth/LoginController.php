<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
Use Auth;
Use App\User;
Use App\PlayerOnline;


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
    protected $redirectTo = '/game';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $providerUser = Socialite::driver($provider)->stateless()->user();
        //dd($user);
         $user = User::where('email',$providerUser->email)->first();

         if(!$user){
            $user = User::create([
                'name'=>$providerUser->getName(),
                'email'=>$providerUser->getEmail(),
                'password'=>bcrypt('acavaunpasswordparaharcodearelgooglelogin'),
                //'provider'=>strtoupper($provider),
                'provider_id'=>$providerUser->id,
             ]);

         }
         Auth::login($user);
         PlayerOnline::create([
            'name'=>Auth::user()->name,
            'connect'=>1,
            ]);
         /*

         */
        $playersOnline =PlayerOnline::all()->tojson();

        return view('principal.index',compact('playersOnline'));

        //return redirect()->to('/game');
        //return $user->token;
    }
}


