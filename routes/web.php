<?php

use App\Http\Controllers\barCodeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;

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
    return view('welcome');
});
// Route::get('/barcode', [barCodeController::class, 'index'])->name('barcode.index');

Route::get('/barcode-generator', function () {
    return view('barcode');
})->name('barcode.form');

Route::post('/generate-barcode', function (Request $request) {
    $request->validate([
        'data' => 'required',
        'type' => 'required',
    ]);

    $data = $request->input('data');
    $type = $request->input('type');

    $barcode = in_array($type, ['QRCODE', 'PDF417'])
        ? (new DNS2D)->getBarcodePNG($data, $type)
        : (new DNS1D)->getBarcodePNG($data, $type);

    return redirect()->route('barcode.form')->with('barcode', $barcode);
})->name('generate.barcode');