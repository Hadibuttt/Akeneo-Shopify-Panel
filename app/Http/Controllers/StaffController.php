<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staffarea;
use App\Models\User;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = staffarea::all();
        $users = User::all();

        return view('staffaccounts')->with([
            'staffs'=> $staffs,
            'users' => $users
        ]);
    }

    public function create()
    {
        $staffs = staffarea::all();

        return view('staffarea')->with([
            'staffs'=> $staffs
        ]);
    }

    public function save(Request $req)
    {
        $user = new User;
        $user->f_name = $req->f_name;
        $user->l_name = $req->l_name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->OrderPage = $req->OrderPage;
        $user->ProductPage = $req->ProductPage;
        $user->save();
        return redirect('staffaccounts');
    }
}
