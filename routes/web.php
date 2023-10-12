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
    $shop->text = $request->text;
    $shop->img_path1 = $request->images[0]->store('images');
    if ($request->images[1] ?? false) {
        $shop->img_path2 = $request->images[1]->store('images');
    }
    if ($request->images[2] ?? false) {
        $shop->img_path3 = $request->images[2]->store('images');
    }
    $shop->save();
    return redirect('/');
});
