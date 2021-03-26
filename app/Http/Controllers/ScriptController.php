<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\User;



class ScriptController extends Controller
{
    public function scriptPrueba(Request $reuqest, $id){
        $user = User::find($id);
        $filename = "$user->cuenta.py";
        $contenido = '""" Quickstart script for InstaPy usage """'."\nfrom instapy import InstaPy\nfrom instapy import smart_run\nfrom instapy import set_workspace\nset_workspace(path=None)\nsession = InstaPy()\nwith smart_run(session):\n\t".'"""Activity flow"""'."\n\tsession.set_skip_users(skip_private=False,\n\t\t\t\t\tprivate_percentage=0)
\nsession.follow_user_followers(['$user->referencia1', '$user->referencia2', '$user->referencia3', '$user->referencia4'], amount=100, randomize=False, sleep_delay=90)\nsession.unfollow_users(amount=375, nonFollowers=True, style='LIFO', unfollow_after=42*60*60, sleep_delay=355)";
        file_put_contents($filename, $contenido);
    $user->script = "/$filename";
    $user->save();
    return view('showuser')->with('user', $user);
    }
}
