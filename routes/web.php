<?php

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

Route::get('/details', function () {
    return view('front.details.demo.dem1');
});

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
Route::prefix('/')->group(function () {

    // PagesController
    Route::get('/','Front\\PagesController@index')->name('index');
    Route::get('/search.html','Front\\PagesController@getSearch')->name('search');
    Route::get('/page/contact','Front\\PagesController@getContact')->name('contact');
    Route::post('/page/contact','Front\\PagesController@postContact');

    // PagesController
    // -------------------
    // MenuController
    Route::get('/menu/{id}','Front\\MenuController@getMenu')->name('menu');
    // -------------------
    // ProductController
    
    Route::get('/page/product-list-order','Front\\ProductController@ProductListOrder')->name('product_list_order');

    Route::get('/page/product-order','Front\\ProductController@DetailsProductOrder')->name('product_order');


    Route::post('/page/product-order','Front\\ProductController@postDetailsProductOrder');
    
    // cart
    Route::get('/page/product-cart','Front\\ProductController@getProduct')->name('product_cart');
    Route::post('/page/product-cart', 'Front\\ProductController@handlePostCart');

    Route::get('/product-info','Front\\ProductController@IndexProductInfo')->name('product_info');
    Route::post('/product-info', 'Front\\ProductController@postCheckoutIndexProductInfo');
    // Route::get('/product-pay','Front\\ProductController@IndexProductPay')->name('product_pay');
    Route::get('/order-success','Front\\ProductController@IndexProductsuccess')->name('order_success');






    // Route::post('/page/product-cart','Front\\ProductController@postProduct')->name('product_cart');
   
    // -------------------
    // ProductInfoController
    // -------------------
    // DetailsController
    Route::get('/page/details-news','Front\\DetailsController@detailsNews')->name('details_news');
    Route::get('/page/list/news','Front\\DetailsController@News')->name('news');
    
    // -------------------
    // CartController

    Route::get('/page/list/faq','Front\\PagesController@getFaq')->name('faq');

    
});
Route::prefix('/cart')->group( function () {
    Route::get('/{act}/{idsp}/{qty?}','Front\\CartController@handleCart')->name('cart');
    Route::post('/delivery', 'LaptopController@getDelivery');

  });
// Route::prefix('product')->group(function () {
    
   
// });
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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});