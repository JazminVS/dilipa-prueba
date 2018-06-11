<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    //
    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function tipo($idtipo)
    {
        $resul=TipoUsuario::find($idtipo);
        if(isset($resul)){
            return $resul->nombre;
        }
        else
        {
            return "sin definir";
        }

    }
}
