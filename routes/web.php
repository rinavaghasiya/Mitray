<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('client.main');
});

Route::get('Lehengas', function () {
    return view('client.Lehengas');
});

Route::get('skirts', function () {
    return view('client.skirts');
});

Route::get('Sarees', function () {
    return view('client.Sarees');
});

Route::get('about-us', function () {
    return view('client.about-us');
});

Route::get('contact', function () {
    return view('client.contact');
});

Route::get('login', function () {
    return view('client.login');
});

Route::get('register', function () {
    return view('client.register');
});

Route::get('product-detail', function () {
    return view('client.product-detail');
});

Route::get('checkouts', function () {
    return view('client.checkouts');
});

Route::get('allproduct', function () {
    return view('client.allproduct');
});


//route::get('product/{sub_cat}', 'client\HomeController@productpg');


route::get('product/{cat}', 'client\HomeController@postpage');
route::get('productdetail/{id}', 'client\HomeController@productdetail');
route::post('logins', 'client\HomeController@logins');
route::post('register', 'client\HomeController@register');
route::get('clientlogout', 'client\HomeController@clientlogout');
route::get('adminlogout', 'client\HomeController@adminlogout');
route::post('addcontact', 'client\HomeController@addcontact');



// admin url

//route::get('alogin','admin\HomeController@login');

route::get('addcatagory','admin\HomeController@addcatagory');
route::post('insertcategory','admin\CategoryController@insertcategory');
// route::get('showcategory','admin\CategoryController@show');
route::get('editcategory/{id}','admin\CategoryController@editca');
route::post('editcategory','admin\CategoryController@editcatagory');
route::get('deletecatagory/{id}','admin\CategoryController@deletecatagory');

route::get('product','admin\ProductController@product');
route::get('addproduct','admin\ProductController@addproduct');
route::post('insertproduct','admin\ProductController@insertproduct');
route::get('editproduct/{id}','admin\ProductController@editproduct');
route::post('editproduct','admin\ProductController@editdata');
route::get('deleteproduct/{id}','admin\ProductController@deleteproduct');
route::get('showcatagory','admin\CategoryController@show');

route::get('dashbord','admin\HomeController@dashbord');
route::get('profile','admin\HomeController@profile');

route::get('addimage/{id}','admin\ProductController@addimage');
route::post('addimagedetail','admin\ProductController@addimagedetail');

Route::get('contactdetail', function () {
    return view('admin.contactdetail');
});
route::get('deletecontact/{id}','admin\HomeController@deletecontact');

route::get('editimage/{id}','admin\ProductController@editimage');
route::post('editproductimage','admin\ProductController@editproductimage');
route::get('showproductimage','admin\ProductController@showproductimage');
route::get('deleteimage/{id}','admin\ProductController@deleteimage');



Route::get('productcard', function () {
    return view('client.democard');
});


Route::get('/downloadPDF','admin\ProductController@downloadPDF');

Route::get('export-excel-csv-file/{slug}', 'admin\ProductController@exportExcelCSV');

