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

//Route::get('/', function () {
//    return view('layouts.main');
//});
Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('project/index', function () {
    return view('project.index');
});

Route::get('project/create', function () {
    return view('project.create');
});

Route::get('material/create', function () {
    return view('material.create');
});

Route::get('material/index', function () {
    return view('material.index');
});

Route::get('material/add_brand', function () {
    return view('material.add_brand');
});

Route::get('material/add_category', function () {
    return view('material.add_category');
});

Route::get('material/material_usage', function () {
    return view('material.material_usage');
});

Route::get('vendor/create', function () {
    return view('vendor.create');
});

Route::get('vendor/index', function () {
    return view('vendor.index');
});

Route::get('vendor/purchase', function () {
    return view('vendor.purchase_details');
});

Route::get('vendor/add_unit', function () {
    return view('vendor.unit');
});

Route::get('contractor/create', function () {
    return view('contractors.create');
});

Route::get('contractor/ca_no', function () {
    return view('contractors.add_ca_no');
});

Route::get('contractor/index', function () {
    return view('contractors.index');
});

Route::get('report', function () {
    return view('report.index');
});

Route::get('user/create', function () {
    return view('users.create');
});

Route::get('user/index', function () {
    return view('users.index');
});




