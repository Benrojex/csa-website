<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {

        /**
         *  In the case where you need to pass the data from your 
         *  controller instead of a form
         *  Make sure to send:
         *  required: email, amount, reference, orderID(probably)
         *  optionally: currency, description, metadata
         *  e.g:
         *  
         */

        /*json_encode($array) }}" >
                *array must be set up as: $array = [ 'custom_fields' => [
                *                                                            ['display_name' => "Cart Id", "variable_name" => "cart_id", "value" => "2"],
                *                                                            ['display_name' => "Sex", "variable_name" => "sex", "value" => "female"],
                *                                                            .
                *                                                            .
                *                                                            .
                *                                                        ]
                *
                *                                  ]
                */

        try{
           
            $meta = [
                'custom_fields' =>[
                    'customer'=>[
                        'display_name' => 'customer', 'variable_name' =>"customer", 'value' =>
                        [
                            ['display_name'=> 'First Name', 'variable_name' =>'first_name', 'value'=>"$request->firstname"],
                            ['display_name'=> 'Last Name', 'variable_name' =>'last_name', 'value'=>"$request->lastname"],
                            ['display_name'=> 'phone', 'variable_name' =>'phone', 'value'=>$request->phone]
                        ]
                    ]
            ];

            $data = array(
                "metadata" => json_encode($meta),
                "amount" => $request->amount,
                "reference" => $request->reference,
                "description" => $request->description,
                "email" => $request->email,
                "currency" => $request->currency,
                "orderID" => $request->orderID,
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            dd($e);
           return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
