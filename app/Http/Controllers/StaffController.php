<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StaffController extends Controller
{
    public function index()
    {
        $users = User::all();
        $checks = User::all();

        $admin = User::orderBy('id', 'asc')->first();

        return view('staffaccounts')->with([
            'users' => $users,
            'admin' => $admin,
            'checks' => $checks
        ]);
    }

    public function create()
    {
        return view('staffarea');
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
        $user->GeneralPage = $req->GeneralPage;
        $user->StaffAccountPage = $req->StaffAccountPage;
        $user->StaffAreaPage = $req->StaffAreaPage;
        $user->UpdateStaffAreaPage = $req->UpdateStaffAreaPage;
        

        $user->save();
        return redirect('staffaccounts');
    }

    public function update($id)
    {
        $user = User::where('id',$id)->first();
        return view('update-staffarea')->with([
            'user'=> $user
        ]);
    }

    public function updated(Request $req,$id)
    {
        $user = User::find($id);
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
        $user->GeneralPage = $req->GeneralPage;
        $user->StaffAccountPage = $req->StaffAccountPage;
        $user->StaffAreaPage = $req->StaffAreaPage;
        $user->UpdateStaffAreaPage = $req->UpdateStaffAreaPage;
        $user->save();

        return redirect('/staffaccounts');
    }

}
