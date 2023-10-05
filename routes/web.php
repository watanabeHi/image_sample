<?php

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
    // $shop->img_path = $request->file('image')->store('images');
    $shop->img_path = $request->image->store('images');
    $shop->save();

    return redirect('/');
});
