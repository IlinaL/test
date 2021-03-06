<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{

    public function getRegister(){
        return view('register');
    }

    public function postRegister(RegisterRequest $request){
        try {
            $message = trans('messages.error');
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'user_type' => $request['user_type'],

            ]);
            if (!empty($user)) {
                $message = trans('messages.registered');
                    return redirect('/login')->with('success_msg', $message);
            }
        } catch (\Exception $e) {
            Log::error(__CLASS__ . "::" . __METHOD__ . "  " . $e->getMessage() . "on line" . $e->getLine());
        }
        return redirect('/register')->with('error_msg', $message);
    }
}
