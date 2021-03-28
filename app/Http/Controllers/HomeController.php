<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Mail\ClienteRevision;
use App\Mail\Churn;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Customization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update(Request $request){

        $user = User::find(Auth::User()->id);

        $user->cuenta = $request['cuenta'];
        $user->hashtag1 = $request['hashtag1'];
        $user->hashtag2 = $request['hashtag2'];
        $user->hashtag3 = $request['hashtag3'];
        $user->hashtag4 = $request['hashtag4'];
        $user->referencia1 = $request['referencia1'];
        $user->referencia2 = $request['referencia2'];
        $user->referencia3 = $request['referencia3'];
        $user->referencia4 = $request['referencia4'];
        $user->igpassword = $request['igpassword'];


        $customizations = Customization::where('user_id', $user->id)->get();
        $customizations[0]->follow = $request['follow'];
        $customizations[0]->comment = $request['comment'];
        $customizations[0]->private = $request['private'];
        $customizations[0]->likes = $request['likes'];
        // $customizations[0]->comment1 = $request['comment1'];
        // $customizations[0]->comment2 = $request['comment2'];
        // $customizations[0]->comment3 = $request['comment3'];
        // $customizations[0]->comment4 = $request['comment4'];
        // $customizations[0]->comment5 = $request['comment5'];
        // $customizations[0]->comment6 = $request['comment6'];
        // $customizations[0]->comment7 = $request['comment7'];
        // $customizations[0]->comment8 = $request['comment8'];
        // $customizations[0]->comment9 = $request['comment9'];
        // $customizations[0]->comment10 = $request['comment10'];
        $customizations[0]->md = $request['md'];
        $customizations[0]->ubicaciones = $request['ubicaciones'];
        $customizations[0]->save();
        if($user->estado != 9 && $user->cliente == 1){
            $user->estado = 3;
            Mail::to('info@growfollowers.life')->send(new ClienteRevision());
        }
        $user->save();
        return redirect('/home');
    }

    public function mercadopago(Request $request){
        if($request->mercadopago == 1){
            return redirect('https://www.mercadopago.com/mla/debits/new?preapproval_plan_id=79b350dd9cf24b188292e740250e3e95');
        }
        if($request->mercadopago == 2){
            return redirect('https://www.mercadopago.com/mla/debits/new?preapproval_plan_id=a9df68ee0bbb45a0b6cec2876dd77cb0');
        }
        if($request->mercadopago == 3){
            return redirect('http://mpago.la/3RqRy1');
        }
    }

    public function baja($id){
        $user = User::find($id);
        $user->cliente = null;
        $user->save();
        $cuenta = $user->cuenta;
        Mail::to('info@masfollows.com')->send(new Churn($cuenta));
        return redirect('home')->with('user', $user);
    }
}