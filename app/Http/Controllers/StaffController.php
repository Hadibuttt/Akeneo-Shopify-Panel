<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staffarea;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = staffarea::all();

        return view('staffaccounts')->with([
            'staffs'=> $staffs
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
        $staff = new staffarea;
        $staff->f_name = $req->f_name;
        $staff->l_name = $req->l_name;
        $staff->email = $req->email;
        $staff->password = $req->password;
        $staff->OrderPage = $req->OrderPage;
        $staff->ProductPage = $req->ProductPage;
        $staff->save();
        return view('success');
    }
}
