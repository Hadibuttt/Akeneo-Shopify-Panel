<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{   

    public function  __construct() {
        Mollie::api()->setApiKey('test_zHW4Pxcn7kDjcm6Fx22W4FygE75xSJ'); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment()
    {   
        

        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR', // Type of currency you want to send
            'value' => '20.00', // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'Payment By codehunger', 
        'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        ]);
    
        $payment = Mollie::api()->payments()->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess() {
        echo 'payment has been received';
        return redirect('/settings');

    }
}