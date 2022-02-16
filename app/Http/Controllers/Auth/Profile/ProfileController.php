<?php

namespace App\Http\Controllers\Auth\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile(): View
    {
        if(Auth::user()){
            $data = [];
            $data['user'] = User::find(Auth::user()->id);
            return view('auth.profile.profile', $data);
        }
    }

    public function update(Request $request): View
    {
        $changed = false;

        $user = Auth::user();

        if($request->name != $user->name){
            $success = $this->validate($request,[
                'name' => 'required|max:255',
            ]);
            $user->name = $request->name;
            $changed = true;
        }

        if($request->email != $user->email){
            $success = $this->validate($request,[
                'email' => 'required|email|max:255|unique:users,id,'.$user->id,
            ]);
            $user->email = $request->email;
            $changed = true;
        }

        if(!empty($request->password) && $request->password != $user->password){
            $success = $this->validate($request,[
                'password' => 'min:6|confirmed',
            ]);
            $user->password = bcrypt($request->password);
            $changed = true;
        }

        if($changed && $success){
            $user->save();
        }

        return view('profile', array('user' => $user));
    }
}
