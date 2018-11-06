<?php

namespace App\Http\Controllers;

use App\Hosteller_info;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function register(){
        return view('register');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $mobile_number = $request->mobile_number;
        $profession = $request->profession;
        $username = $request->username;
        $password = $request->password;

        $obj = new Hosteller_info();
        $obj->name = $name;
        $obj->email = $email;
        $obj->address = $address;
        $obj->mobile_number = $mobile_number;
        $obj->profession = $profession;
        $obj->username = $username;
        $obj->password = $password;
        if ($obj->save()) {
            echo 'Information Successfully Inserted';
        }
    }
}
