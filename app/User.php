<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class User extends \Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first', 'last', 'email', 'timeframe',
    ];
    protected $guarded = array('primaryKey');
    public $timestamps = array('created');

    public static function getAllUsers(){
        $usersRaw = User::all();
        $users = [];
        foreach ($usersRaw as $user){

            $users[] = $user->original;
        }
        return $users;
    }
}
