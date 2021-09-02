<?php

Route::any('products/search', 'ProductController@search')->name('products.search')->middleware('auth');
Route::resource('products', 'ProductController')->middleware('auth');


Auth::routes(['register' =>false]);

/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');
*/



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

// Route::middleware([])->group(function () {

//     Route::prefix('admin')->group(function () {

//         Route::namespace('Admin')->group(function () {

//             Route::name('admin.')->group(function () {
//                 Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

//                 Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

//                 Route::get('/produtos', 'TesteController@teste')->name('products');

//                 Route::get('/', function () {
//                     return redirect()->route('admin.dashboard');
//                 })->name('home');
//             });
//         });
//     });
// });


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function () {
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('products');

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});


Route::get('redirect3', function(){
    return redirect()->route('url.name');
});

Route::get('/nome-url', function(){
    return 'Hey hey hey';
})->name('url.name');//PODE SETAR A ROTA USANDO SEU NOME

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::redirect('/redirect1', '/redirect2');

Route::get('redirect2', function(){
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}', function($idProduct = '') {
    return "Produtos(s) {$idProduct}";
});

Route::get('/categoia/{flag}/posts', function($flag) {
    return "Produtos";
});

Route::get('/categorias/{flag}', function($prm1){
    return "Produtos da categoria: {$prm1}";
});

Route::match(['post' , 'get'], '/match', function () {
    return 'match';
});

Route::get('/any', function () {
    return 'Any';
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', function () {
    return '';
});


Route::get('/empresa', function () {
    return view('Sobre a Empresa');
});


Route::get('/contato', function () {
    return view('site.contact');
});


Route::get('/', function () {
    return view('welcome');
});
