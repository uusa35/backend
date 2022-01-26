<?php

namespace Usama\Tap2\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Setting;
use App\Models\User;
use App\Services\Traits\OrderTrait;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

trait TapTrait
{
    use OrderTrait;

    public function processPayment($orderId)
    {
        try {
            // 1- prepare data
            $order = Order::whereId($orderId)->with('order_metas','user')->first();
            // 2- update order with the reference_id
            // 3- return the paymentURL
            $curl = curl_init();
            $info = [
                'amount' => $order->net_price,
                'currency' => "KWD",
                "customer" => [
                    "first_name" => $order->user->name_ar . $order->user->name,
                    "email" => $order->email,
                    "phone" => $order->mobile
                ],
                'source' => [
                    'id' => 'src_all'
                ],
                "redirect" => [
                    "url" => route('tap2.web.payment.return')
                ],
                "post" => [
                    "url" => route('tap2.web.payment.post')
                ]
            ];
//                "destinations" => [
//                    "id" => 1,
//                    "amount" => 1,
//                    "currency" => "KWD"
//                ]

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TAP2_PAYMENT_URL'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($info),
                CURLOPT_HTTPHEADER => array(
                    "authorization: Bearer ".env('TAP2_TOKEN_TEST'),
                    "content-type: application/json"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                return $response;
            }
        } catch (Exception $e) {
            abort(404, $e->getMessage());
        }
    }

}
