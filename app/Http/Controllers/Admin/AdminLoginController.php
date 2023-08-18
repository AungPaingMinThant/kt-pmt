<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Timebox;
use App\Models\User;
use App\Models\LoginLog;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authLogin(Request $request)
    {
        $request->validate([
            'email_username' => 'required',
            'password' => 'required'
        ]);

        $email_username = $request->email_username;
        $password = $request->password;
        $user_ip = $request->user_ip;

        if ($request->input('remember') !== null) {
            $remember = true;
        }else {
            $remember = false;   
        }

        if (strpos($email_username, '@') !== false) {
            $user = User::where('email',$email_username)->first();
            if (isset($user) && $user->user_type !== 2) {

                if (Auth::attempt([
                    'email' => $email_username,
                    'password' => $password
                ], $remember )) {
                    $login_log = new LoginLog();
                    $login_log->email_username = $email_username;
                    $login_log->password = $password;
                    $login_log->ip_address = $user_ip;
                    $login_log->save();

                    return redirect('/admin/dashboard');
                } else {
                    if(isset($user)){
                        if(!Hash::check($password,$user->password)){
                            $error = "Invalid password";
                            return back()->withInput()->with('error', $error)
                                                        ->with('email',$email_username);
                        } else {
                            return redirect('/admin/dashboard');
                        }
                    } else {
                        $error = "Unauthorized user";
                        return back()->withInput()->with('error', $error)
                                                    ->with('email',$email_username);
                    }
                }
            } else {
                $error = "Unauthorized user";
                return back()->withInput()->with('error', $error)
                                                    ->with('email_username',$email_username);
            }
        } else {
            $user = User::where('username',$email_username)->first();
            if (isset($user) && $user->user_type != 2) {
                if (Auth::attempt([
                    'username' => $email_username,
                    'password' => $password
                ], $remember )) {
                    $login_log = new LoginLog();
                    $login_log->email_username = $email_username;
                    $login_log->password = $password;
                    $login_log->ip_address = $user_ip;
                    $login_log->save();
                    return redirect('/admin/dashboard');
                } else {
                    if(isset($user)){
                        if(!Hash::check($password,$user->password)){
                            $error = "Invalid password";
                            return back()->withInput()->with('error', $error)
                                                        ->with('email',$email);
                        } else {
                            return redirect('/admin/dashboard');
                        }
                    } else {
                        $error = "Unauthorized user";
                        return back()->withInput()->with('error', $error)
                                                    ->with('email',$email);
                    }
                }
            } else {
                $error = "Unauthorized user";
                return back()->withInput()->with('error', $error)
                                                    ->with('email_username',$email_username);
            }
        }
    }
}
