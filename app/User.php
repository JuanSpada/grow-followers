<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Auth;
use DB;
use App\Customization;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cuenta', 'avatar', 'password', 'hashtags', 'referencias', 'igpassword', 'estado', 'phone', 'cliente', 'pais'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function showAssignedTo(){
        $user = User::find($this->id);
        if($user != null){
            switch($user->assigned_to){
                case '1':
                return 'Juan';
                break;
                case '2':
                return 'Pao';
                break;
                case '3':
                return 'SPEEDY TETE';
                break;
            }
        }else{
            return '';
        }
    }

    public function cantidad(){
        $cantidad['activo'] = count(DB::table('users')->where('estado', '1')->get());
        $cantidad['inactivo'] = count(DB::table('users')->where('estado', '0')->get());
        $cantidad['prueba'] = count(DB::table('users')->where('estado', '2')->get());
        $cantidad['revision'] = count(DB::table('users')->where('estado', '3')->get());
        $cantidad['error'] = count(DB::table('users')->where('estado', '4')->get());
        $cantidad['clientes'] = count(DB::table('users')->where('cliente', 1)->get());
        return $cantidad;
    }

    public function customizations(){
        $user = User::find($this->id);
        $customizations = DB::table('customizations')
                            ->where('user_id', $user->id)
                            ->get();
        return $customizations;
    }

    public function instagram(){
        return $this->hasOne(Instagram::class, 'user_id', 'id');
    }

    public function showEstado(){
        $user = User::find($this->id);
        if($user != null){
            switch ($user->estado) {
                case '0':
                    return 'Inactivo';
                    break;
                case '1':
                    return 'Activo';
                    break;
                case '2':
                    return 'Prueba Finalizada';
                    break;
                case '3':
                    return 'En Revisión';
                    break;
                case '4':
                    return 'Error en la Validación';
                    break;
                case '9':
                return 'Admin';
                    break;
            }
        }else{
            return '';
        }
    }
    public function scopeUser($query, $request){
        # si esta el user
        if(trim($request->user) != ""){
            $query->where('cuenta', 'LIKE', "%$request->user%");
        }
        # si esta el user y el estado
        if($request->user != "" && $request->estado != ""){
            $query->where('cuenta', 'LIKE', "%$request->user%")
                  ->where('estado', $request->estado);
        }
        #si esta user y estasdo
        if($request->user != "" && $request->estado != "" && $request->assigned_to){
            $query->where('cuenta', 'LIKE', "%$request->user%")
                  ->where('assigned_to', $request->assigned_to)
                  ->where('estado', $request->estado);
        }
        # si esta estado
        if($request->estado != "" && $request->user == ""){
            $query->where('estado', "=", $request->estado);
        }
        # si esta asignado
        if($request->assigned_to && $request->user == ""){
            $query->where('assigned_to', $request->assigned_to);
        }
        # si esta asignado y estado
        if($request->assigned_to && $request->estado && $request->user == ""){
            $query->where('estado', "=", $request->estado)
                  ->where('assigned_to', $request->assigned_to);
        }
        # si esta asignado, estado y user
        if($request->assigned_to && $request->estado && $request->user != ""){
            $query->where('estado', "=", $request->estado)
                  ->where('assigned_to', $request->assigned_to)
                  ->where('cuenta', 'LIKE', "%$request->user%");
        }
        # Si esta vacio y agrega ?clientes
        if($request->user != " " && $request->clientes){
            $query->where('cliente', "=", 1);
        }
        # si clientes y asiggned
        if($request->clientes && $request->assigned_to && !$request->user && !$request->estado){
            $query->where('cliente', "=", 1)
                  ->where('assigned_to', $request->assigned_to);
        }
        # si clientes, assigned y estado
        if($request->clientes && $request->assigned_to && $request->estado && !$request->user){
            $query->where('cliente', "=", 1)
                  ->where('assigned_to', $request->assigned_to)
                  ->where('estado', "=", $request->estado);
        }
        # si tiene clientes y estado
        if($request->clientes && !$request->assigned_to && $request->estado && !$request->user){
            $query->where('cliente', "=", 1)
                  ->where('estado', "=", $request->estado);
        }
        # si tiene clientes y usuario
        if($request->clientes && !$request->assigned_to && !$request->estado && $request->user){
            $query->where('cliente', "=", 1)
                  ->where('cuenta', 'LIKE', "%$request->user%");
        }
        # si clientes, assigned, estado y usuario
        if($request->clientes && $request->assigned_to && $request->estado && $request->user){
            $query->where('cliente', "=", 1)
                  ->where('assigned_to', $request->assigned_to)
                  ->where('estado', "=", $request->estado)
                  ->where('cuenta', 'LIKE', "%$request->user%");
        }
    }
}
