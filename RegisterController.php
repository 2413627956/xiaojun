<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //注册
    public function register(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
        $email = $request['email'];
        if ($username == "" || $password == "") {
            echo 'code:2';
        } else {
            $username1 =  DB::table('zhuce')->where('username', $username)->first();
            $email1 = DB::table('zhuce')->where('email', $email)->first();
            if (!empty($username1)) {
                echo 'code:6';
            } else {
                if (!empty($email1)) {
                    echo 'code:3';
                } else {
                    $rel = DB::table('zhuce')->insert(['username' => $username, 'password' => $password, 'email' => $email]);
                    if (!empty($username)) {
                        echo 'code:0';
                    } else {
                        echo 'code:1';
                    }
                }
            }
        }
    }

    //登录
    public function register1(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
        if ($username == "" || $password == "") {
            echo 'code:2';
        } else {
            $username1 =  DB::table('zhuce')->where('username', $username)->first();
            $password1 =  DB::table('zhuce')->where('password', $password)->first();
            if (empty($username1)) {
                echo 'code:4';
            } else {
                if (empty($password1)) {
                    echo 'code:5';
                } else {
                    echo 'code:0';
                }
            }
        }
    }
}
