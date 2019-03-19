<?php

use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('size', function () {
    $productAttribute = ProductAttribute::where(['product_id' => request()->product_id, 'color_id' => request()->color_id])->where('qty', '>', 0)->with('size')->get();
    return response()->json($productAttribute, 200);
});

Route::get('colors', function () {
    return ProductAttribute::where([
        'product_id' => request()->product_id,
        'size_id' => request()->size_id,
    ])->with('color')->get()->pluck('color')->unique()->pluck('id')->toArray();
});

Route::get('qty', function () {
    $elements = ProductAttribute::where([
        'product_id' => request()->product_id,
        'size_id' => request()->size_id,
    ])->select('id','color_id','qty')->get();
    return response()->json($elements,200);
});


Route::resource('user', 'Api\UserController')->only(['index','show']);
Route::resource('product', 'Api\ProductController')->only(['index','show']);
Route::resource('branch', 'Api\BranchController')->only(['index']);
Route::resource('timing', 'Api\TimingController')->only(['index']);
Route::get('local/branch', 'Api\BranchController@getLocalBranches');
Route::get('timing/list', 'Api\TimingController@getTimingList');
