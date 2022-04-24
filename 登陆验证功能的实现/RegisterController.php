<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class RegisterController extends Controller
{
    //注册
    // public function register(Request $request)
    // {
    //     $username = $request['username'];
    //     $password = $request['password'];
    //     $email = $request['email'];
    //     if ($username == "" || $password == "") {
    //         echo 'code:2';
    //     } else {
    //         $username1 =  DB::table('zhuce')->where('username', $username)->first();
    //         $email1 = DB::table('zhuce')->where('email', $email)->first();
    //         if (!empty($username1)) {
    //             echo 'code:6';
    //         } else {
    //             if (!empty($email1)) {
    //                 echo 'code:3';
    //             } else {
    //                 $rel = DB::table('zhuce')->insert(['username' => $username, 'password' => $password, 'email' => $email]);
    //                 if (!empty($username)) {
    //                     echo 'code:0';
    //                 } else {
    //                     echo 'code:1';
    //                 }
    //             }
    //         }
    //     }
    // }

    //登录cookie
    public function register1(Request $request)
    {

        if (isset($_COOKIE['user'])) echo 'code:01'; //判断cookie是否存在如果存在就登入成功
        else {
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
                        setcookie("user", $username, time() + 3600); //如果用户登入成功就设置一个cookie结束时间3600秒
                        //也就是说只要登录成功一次3600秒后就不需要在进行登入了
                        echo 'code:0';
                    }
                }
            }
        }
    }
    //登录Session
    public function register2(Request $request)
    {
        if (isset($_COOKIE['user']) && !isset($_SESSION['user'])) {
            //判断cookie存在session不存在
            //cookie存在说明用户以前登入过但是刷新过浏览器了
            session_start();
            $_SESSION["user"] = $_COOKIE["user"];
            //创建session并将cookie的值给session
        }
        if (isset($_SESSION["user"])) echo 'code:01';
        else {
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
                        session_start();
                        $_SESSION["user"] = $username;
                        $lifeTime = 3600;
                        setcookie(session_name(), session_id(), time() + $lifeTime, "/");
                        setcookie("user", $username, time() + 3600);
                        echo 'code:0';
                    }
                }
            }
        }
    }
}
