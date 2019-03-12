<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 7/23/17
 * Time: 9:02 AM
 */

use App\Models\Country;
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

function getCurrencySymbol()
{
    return session('currency')->currency_symbol_en;
}


function getDaySelected()
{
    return session()->get('day_selected');
}

function getDaySelected_format()
{
    return session()->get('day_selected_format');
}

function getTimingId()
{
    return session()->get('timing_id');
}

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function getClientCountry()
{
    // has no relation with Country of the session
    $user_ip = app()->isLocal() ? '176.17.238.199' : get_client_ip();
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];
    if (auth()->check()) {
        $clientCountry = auth()->user()->country;
    } else {
        $clientCountry = Country::where('name', $country)->first();
    }
    return !is_null($clientCountry) ? $clientCountry : null;
}

function getCurrentCountrySessionId()
{
    if (!session()->has('country') && !is_null(session()->get('country'))) {
        return 0;
    }
    return session()->get('country')['id'];
}
