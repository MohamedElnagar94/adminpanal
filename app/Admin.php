<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Model implements Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;
    protected $table = 'admins';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
