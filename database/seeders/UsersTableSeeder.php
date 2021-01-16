<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\Illuminate\Support\Facades\Hash;
use App\Models\AdminLogin;
use DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('admin_logins')->truncate();

        $admin = AdminLogin::create([
            'f_name' => 'Admin User',
            'l_name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'OrderPage' => 1,
            'ProductPage' => 1,
            'AddProductPage' => 1,
            'OrderDetailsPage' => 1,
            'UpdateProductPage' => 1,
            'CategoryPage' => 1,
            'AddCategory' => 1,
            'CustomerPage' => 1,
            'AboutCustomerPage' => 1,
            'SubcategoryPage' => 1,
            'AddSubcategoryPage' => 1,
            'UpdateSubcategoryPage' => 1,
            'CollectionPage' => 1,
            'AddCollectionPage' => 1,
            'UpdateCollectionPage' => 1,
            'SettingsPage' => 1,
            'GeneralPage' => 1,
            'StaffAccountPage' => 1,
            'StaffAreaPage' => 1,
            'UpdateStaffAreaPage' => 1,
            'TaxPage' => 1,
            'PaymentPage' => 1,
            'NotificationPage' => 1,
            'TranslationPage' => 1,
            'UpdateCategory' => 1,





        ]);       
    }
}