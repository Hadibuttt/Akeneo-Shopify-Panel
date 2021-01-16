<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_logins', function (Blueprint $table) {
            $table->id();
            $table->String('email');
            $table->String('password');
            $table->String('f_name');
            $table->String('l_name');
            $table->boolean('OrderPage');
            $table->boolean('ProductPage');
            $table->boolean('OrderDetailsPage');
            $table->boolean('AddProductPage');
            $table->boolean('UpdateProductPage');
            $table->boolean('CategoryPage');
            $table->boolean('AddCategory');
            $table->boolean('UpdateCategory');
            $table->boolean('CustomerPage');
            $table->boolean('AboutCustomerPage');
            $table->boolean('SubcategoryPage');
            $table->boolean('AddSubcategoryPage');
            $table->boolean('UpdateSubcategoryPage');
            $table->boolean('CollectionPage');
            $table->boolean('AddCollectionPage');
            $table->boolean('UpdateCollectionPage');
            $table->boolean('SettingsPage');
            $table->boolean('GeneralPage');
            $table->boolean('StaffAccountPage');
            $table->boolean('StaffAreaPage');
            $table->boolean('UpdateStaffAreaPage');
            $table->boolean('TaxPage');
            $table->boolean('PaymentPage');
            $table->boolean('NotificationPage');
            $table->boolean('TranslationPage');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_logins');
    }
}
