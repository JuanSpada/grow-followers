<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mail\UsuarioRegistrado;
use App\Mail\CuentaActivada;
use App\Mail\PruebaFinalizada;
use App\Mail\ErrorValidacion;
use App\Mail\Churn;
use App\Mail\CuentaRevision;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Customization;
use Artisan;
use App\Droplet;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function configurar(){
        return view('configurar');
    }

    public function backoffice(Request $request)
    {
        $estado = null;
        $users = User::user($request)->latest()->paginate(50);
        $droplets = Droplet::all();
        return view('backoffice')
        ->with('users', $users)
        ->with('droplets', $droplets);
    }

    public function terminos(){
        return view('terminos');
    }

    public function showUser(Request $request, $id){
        $user = User::find($id);
        $droplets = Droplet::all();
        return view('showuser')
        ->with('droplets', $droplets)
        ->with('user', $user);
    }
    
    public function showScripts(){
        $users['users'] = DB::table('users')->whereIn('estado', ['1', '3'])->get();
        // $users = DB::table('users')->where('estado', '1')->get();

        $users['activo'] = count(DB::table('users')->where('estado', '1')->get());
        $users['inactivo'] = count(DB::table('users')->where('estado', '0')->get());
        $users['prueba'] = count(DB::table('users')->where('estado', '2')->get());
        $users['revision'] = count(DB::table('users')->where('estado', '3')->get());
        $users['error'] = count(DB::table('users')->where('estado', '4')->get());

        return view('scripts')->with('users', $users);
    }

    public function userDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('gestion');
    }


    //EDIT ESTADO DEL BACK OFFICE
    public function editEstado(Request $request, $id){
        $user = User::find($id);
        //dd($request->estado);
        if($request->estado != null){
			//dd($request->estado);
            $user->estado = $request['estado'];
            if($user->estado == 1){
                Mail::to($user->email)->send(new CuentaActivada());
            }
            if($user->estado == 2){
                Mail::to($user->email)->send(new PruebaFinalizada());
            }
            if($user->estado == 4){
                Mail::to($user->email)->send(new ErrorValidacion());            
            }
            if($user->estado == 3){
                Mail::to($user->email)->send(new CuentaRevision());
            }
        }
        if($request->assigned_to){
            $user->assigned_to = $request->assigned_to;
        }
        
        $user->save();
        return redirect('gestion');;
    }

    public function cache(){
        Artisan::call('cache:clear', [
            '--force' => true
        ]);
    }
    public function migrate(){
        Artisan::call('migrate', [
            '--force' => true
        ]);
    }
    public function artisankey(){
        Artisan::call('key:generate', [
            '--force' => true
        ]);
    }

    public function crearCustomizations(){
        $users = User::all();
        foreach ($users as $user) {
            $customization = DB::table('customizations')->where('user_id', $user->id)->get();
            $customization = New Customization();
            $customization->user_id = $user->id;
            $customization->save();
        }

    }

    public function pagoconfirmado(Request $request){
        if($_GET){
            $suscripcion = $_GET['suscripcion'];
            if($suscripcion == 1){
                // /pagoconfirmado?suscripcion=1
                $susc = new Cliente;
                $susc->user_id = Auth::user()->id;
                $susc->suscripcion = $suscripcion;
                $susc->save();
                $user = User::find(Auth::user()->id);
                $user->cliente = 1;
                $user->save();
                return view('pagoconfirmado');
            }elseif($suscripcion == 2){
                // /pagoconfirmado?suscripcion=2
                $susc = new Cliente;
                $susc->user_id = Auth::user()->id;
                $susc->suscripcion = $suscripcion;
                $susc->save();
                $user = User::find(Auth::user()->id);
                $user->cliente = 1;
                $user->save();
                return view('pagoconfirmado');
            }elseif($suscripcion == 3){
                // /pagoconfirmado?suscripcion=3
                $susc = new Cliente;
                $susc->user_id = Auth::user()->id;
                $susc->suscripcion = $suscripcion;
                $susc->save();
                $user = User::find(Auth::user()->id);
                $user->cliente = 1;
                $user->save();
                return view('pagoconfirmado');
            }elseif($suscripcion == 4){
                // /pagoconfirmado?suscripcion=4
                $susc = new Cliente;
                $susc->user_id = Auth::user()->id;
                $susc->suscripcion = $suscripcion;
                $susc->save();
                $user = User::find(Auth::user()->id);
                $user->cliente = 1;
                $user->save();
                return view('pagoconfirmado');
            }else{
                return view('home');
            }
        }else{
            return view('home');
        }
    }

    public function droplets(){
        $droplets = Droplet::all();
        return view('droplets')->with('droplets', $droplets);
    }
    public function adddroplet(Request $request){
        $droplet = new Droplet;
        $droplet->name = $request->name;
        $droplet->ip = $request->ip;
        $droplet->save();
        return redirect('droplets');
    }
    public function deletedroplet(Request $request){
        $drop = Droplet::where('id', $request->id);
        $drop->delete();
        return redirect('droplets');
    }

    // public function alta($id){
    //     $user = User::find($id);
    //     $user->cliente = 1;
    //     $user->save();
    //     $susc = new Cliente;
    //     $susc->user_id = $id;
    //     $susc->suscripcion = 9;
    //     $susc->save();
    //     return redirect('home');
    // }
}
