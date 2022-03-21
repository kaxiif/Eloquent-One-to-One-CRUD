<?php

use App\Models\Address;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/insert', function () {
//     $user = User::findorfail(1);
//     $address =new Address(['name'=>'1212 Jamshoro Sindh Pakistan']);
//     $user->address()->save($address);
// });


Route::get('/insert', function () {
    $user = User::findorfail(1);
    $address = new Address(['name'=>'2133 Hyderabad Sindh Pakistan']);
    //$user->$address;
    $address->save();
});

Route::get('/update', function () {
    $address = Address::whereId(8)->first();
    $address->name='3322 updated address Karachi';
    
    $address->save();
});