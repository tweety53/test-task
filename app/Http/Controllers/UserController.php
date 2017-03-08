<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
/**
 * Get current user object
 * @param  int $id Current user id
 * @return User     current user object
 */
    public function getProfile($id)
    {
        $this->user = User::findOrFail($id);
        return $this->user;
    }    

/**
 * Set and save into db edited user parameters 
 * @param int  $id      current user id
 * @param User    $user    current user
 * @param Request $request request data
 */
    public function setProfile($id, User $user, Request $request)
    {
        $user = User::findOrFail($id);
        $user->phone_number = $request['phone_number'];
        $user->name = $request['name'];
        if(!empty($request['password'])){
            $user->password = bcrypt($request['password']);
        }

        $user->save();
    }
}
