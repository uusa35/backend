<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 7/23/17
 * Time: 9:02 AM
 */

use App\Models\Setting;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;


/**
 * @param $element
 */
function checkTrans($element)
{
    if (strpos(trans($element), 'message.') === 0 || strpos(trans($element), 'general.') === 0) {
        return null;
    }
    return trans($element);
}

/**
 * @param $element
 * @return null|string
 */
function activeItem($element, $another = [])
{
    if (strpos(Route::currentRouteName(), $element)) {
        return 'active open';
    }
    if (!empty($another)) {
        foreach ($another as $k => $value)
            if (strpos(Route::currentRouteName(), $value)) {
                return 'active open';
                break;
            }
    }
    return null;
}

function activeLabel($element)
{
    return $element ? 'label-success' : 'label-danger';
}

function activeText($element, $text = 'Active')
{
    $element ? $text = $text : $text = 'N/A';
    return $text;
}


function getCouponValue()
{
    $coupon = session()->has('coupon') ? session()->get('coupon') : null;
    if (!is_null($coupon)) {
        return $coupon->is_percentage ? (Cart::total() * ($coupon->value / 100)) : $coupon->value;
    }
    return 0;
}

function getCartNetTotal()
{
    $cartTotalVal = str_replace(',', '', Cart::total());
    return (float)$cartTotalVal - (float)getCouponValue();
}


function getDeliveryServiceCost()
{
    $settings = Setting::first();
    $cartValue = Cart::total();
    if ($cartValue >= $settings->delivery_service_minimum_charge) {
        return 0;
    }
    return $settings->delivery_service_cost;
}


function getConvertedPrice($price)
{
    $currentCurrency = session()->get('currency');
    return $price * $currentCurrency->exchange_rate;
}
