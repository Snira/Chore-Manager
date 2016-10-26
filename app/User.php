<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * User model.
 *
 * @property int    $id
 * @property string $name
 * @property string $description
 * @property string $role
 */
class User extends Authenticatable
{

    use Notifiable;
    use SoftDeletes;

    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = ['deleted_at'];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
        //Hashes all passwords
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }



}
