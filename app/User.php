<?php

namespace App;

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
    public $timestamps = false;

    public static function getAllUsers(){
        $usersRaw = User::all();
        $users = [];
        foreach ($usersRaw as $user){

            $users[] = $user->original;
        }
        return $users;
    }

    public static function addUser($input){
        $user = new User;
        $user->first = $input['first'];
        $user->last = $input['last'];
        $user->email = $input['email'];
        $user->timeframe = $input['timeframe'];
        $response = $user->save();
        return $response;
    }
}
