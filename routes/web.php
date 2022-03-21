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
    $user = User::findorfail();
    $address = new Address(['name'=>'2133 Hyderabad Sindh Pakistan']);
    //$user->$address;
    $address->save();
});

Route::get('/update', function () {
    
    
    
    // $address = Address::whereId(8)->first();
    // $address->name='3322 updated address Karachi';
    // $address->save();

    Address::where('user_id', 1)
      ->update(['name' => '2133 updated Hyderabad Sindh Pakistan']);
});

Route::get('/read', function(){
    $user=User::findorfail(2);
    echo $user->name;

});

Route::get('/delete', function(){
    $address=User::findorfail(2);
    $address->delete();

});


// Route::get('/upsert', function(){
//     $user=User::findorfail(2);

//     $address = Address::updateOrCreate(
//         ['user_id' => $user, 'name' => 'San Diego']
//     );
// });