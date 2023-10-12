<?php

use App\Models\Image;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('test');
});

Route::post('/post', function (Request $request) {
    $shop = new Shop();
    $shop->text = $request->text;
    $shop->save();
    foreach ($request->images as $input_image) {
        $image = new Image();
        $image->img_path = $input_image->store('images');
        $image->shop_id = $shop->id;
        $image->save();
    }
    return redirect('/');
});
