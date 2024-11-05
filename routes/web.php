<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DocumentController;

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







Route::get('admin/documents/vente', function(){
    return view('documents.vente');
});
Route::get('/produits',[DocumentController::class , 'produits']);

Route::get('/export_document_pdf/{id}', 'DocumentController@export_document_pdf')->name('export_document_pdf');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('documents', DocumentController::class);

});


