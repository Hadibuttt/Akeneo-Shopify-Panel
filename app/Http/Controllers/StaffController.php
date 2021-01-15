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
        $user->OrderDetailsPage = $req->OrderDetailsPage;
        $user->ProductPage = $req->ProductPage;
        $user->AddProductPage = $req->AddProductPage;
        $user->UpdateProductPage = $req->UpdateProductPage;
        $user->CategoryPage = $req->CategoryPage;
        $user->AddCategoryPage = $req->AddCategoryPage;
        $user->UpdateCategoryPage = $req->UpdateCategoryPage;
        $user->CustomerPage = $req->CustomerPage;
        $user->AboutCustomerPage = $req->AboutCustomerPage;
        $user->SubcategoryPage = $req->SubcategoryPage;
        $user->AddSubcategoryPage = $req->AddSubcategoryPage;
        $user->UpdateSubcategoryPage = $req->UpdateSubcategoryPage;
        $user->CollectionPage = $req->CollectionPage;
        $user->AddCollectionPage = $req->AddCollectionPage;
        $user->UpdateCollectionPage = $req->UpdateCollectionPage;
        $user->SettingsPage = $req->SettingsPage;
        $user->save();
        return redirect('staffaccounts');
    }
}
