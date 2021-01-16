<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;
use\Illuminate\Support\Facades\Hash;
use Auth;

class StaffController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = AdminLogin::all();
        $checks = AdminLogin::all();

        $admin = AdminLogin::orderBy('id', 'asc')->first();
        if(Auth::user()->StaffAccountPage == 1)
        return view('staffaccounts')->with([
            'users' => $users,
            'admin' => $admin,
            'checks' => $checks
        ]);
        else    
            return view('restricted');
    }

    public function create()
    {
        if(Auth::user()->StaffAreaPage == 1)
            return view('staffarea');
        else    
            return view('restricted');
    }

    public function save(Request $req)
    {
        $hash = Hash::make($req->password);
        $user = new AdminLogin;
        $user->f_name = $req->f_name;
        $user->l_name = $req->l_name;
        $user->email = $req->email;
        $user->password = $hash;
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
        $user->TaxPage = $req->TaxPage;
        $user->PaymentPage = $req->PaymentPage;
        $user->NotificationPage = $req->NotificationPage;
        $user->TranslationPage = $req->TranslationPage;
        

        $user->save();
        return redirect('staffaccounts');
    }

    public function update($id)
    {
        $user = AdminLogin::where('id',$id)->first();
        if(Auth::user()->UpdateStaffAreaPage == 1)
        return view('update-staffarea')->with([
            'user'=> $user
        ]);
        else    
            return view('restricted');
    }

    public function updated(Request $req,$id)
    {
        $user = AdminLogin::find($id);
        $hash = Hash::make($req->password);
        $user->f_name = $req->f_name;
        $user->l_name = $req->l_name;
        $user->email = $req->email;
        $user->password = $hash;
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
        $user->TaxPage = $req->TaxPage;
        $user->PaymentPage = $req->PaymentPage;
        $user->NotificationPage = $req->NotificationPage;
        $user->TranslationPage = $req->TranslationPage;
        $user->save();

        return redirect('/staffaccounts');
    }

}
