<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard',  InvocableDashboardController::class)->middleware(['auth'])->name('dashboard');


Route::get('/dashboard', function () {
            $categories = Category::all();
            return view('dashboard',compact('categories'));
        })->middleware(['auth'])->name('dashboard');

 Route::group(['as' => 'categories.', 'prefix' => 'categories'],  function() {
            Route::get('/', 'Shipping\CategoryController@index')->name('index');
            Route::get('/my-shipments', 'Shipping\ShipmentsController@showAllShipments')->name('myShipments');
            Route::get('/edit/{id}', 'Shipping\ShipmentsController@edit')->name('edit');
            Route::post('/update/{id}/{status}/{price}', 'Shipping\ShipmentsController@update')->name('update');
            //products
            Route::get('/getProducts/{id}', 'Shipping\CategoryController@getProducts')->name('getProducts');
            Route::get('/make-shipment-of-pro/{id}', 'Shipping\ProductController@index')->name('makeShipment');
            Route::post('/submit/{id}', 'Shipping\ProductController@submitShipment')->name('submit');
            //myJournalEntity
            Route::get('/my-journal-entity', 'Shipping\JournalEntityController@showAlljournalentities')->name('myJournalEntity');
        });


require __DIR__.'/auth.php';
