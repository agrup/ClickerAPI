<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
Use Auth;
Use App\User;
Use App\Player;
Use App\Personaje;
Use App\Game;
Use App\marker;

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

        /* Verifica que la cuenta tenga un mail*/
        if($providerUser->email ==null){
                $providerUser->email = $providerUser->getName();

     }
         $user = User::where('email',$providerUser->email)->first();

         if(!$user){
            $user = User::create([
                'name'=>$providerUser->getName(),
                'email'=>$providerUser->getEmail(),
                'password'=>bcrypt('acavaunpasswordparaharcodearelapilogin'),
                //'provider'=>strtoupper($provider),
                'provider_id'=>$providerUser->id,
             ]);
            //Creo el player
            $player=Player::create([
                'nickname'=>$providerUser->getName(),
                'especialidad'=>"",
                'experiencia'=>0,
                'millas'=>1000,
            ]);
            //Creo los markers asociados al player
            


         }
         Auth::login($user);
        //Paso la informacion del Player asociado al usuario auth
        $player = Player::find(Auth::user()->id);   


        $personajes = Personaje::where('User',\Auth::user()->id)->get();
        //$partidas= Game::where('Estado',false);
            
        $partidas= Game::where('Estado',false)->orderBy('id','desc')->take(20)->get();
        $partidaResult=[];
        foreach($partidas as $partida){

           array_push($partidaResult,['id'=>$partida->id,
                            'Personaje'=>$partida->Personaje->name,
                            'User'=>$partida->Personaje()->first()->User()->first()->name
            ]);
        };
         $markers=marker::all(); 
      //$markers=$player->marker;   
      $partidas =  $partidaResult;
      $personajeActual=$personajes->first();

        return view('principal.index')->with(compact('personajes'))
                                        ->with(compact('partidas'))
                                        ->with(compact('personajeActual'))
                                        ->with(compact('player'))
                                        ->with(compact('markers'))
                                        ;

    


       //return view('principal.index')
                                    //->with(compact('playersOnline'))
                                    //->with(compact('personajes'));
            

        //return redirect()->to('/game');
        //return $user->token;
    }
}


