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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/weather','WeatherController@index');

//Route::get('/create_message', function ( ) {
//    return view('create_message');
//});

//Route::post('/create_message', function (Request $request) {
//    //Выдаёт ошибку ,разобраться потом!
////    $validator = Validator::make($request->all(), [
////        'message' => 'min:5'
////    ]);
////    if ($request->fails()) {
////        return view('/home')
////            ->withInput()
////            ->withErrors($validator);
////    }
//
//
//    $message = new \App\Message;
//    $message->text = $request->message;
//    $message->user_name = $request->user_name;
//    $message->save();
//
//  //  return view('create_message');
//    return redirect('messages');
//});


//Route::get('/messages',function (){
//   // $messages=\App\Message::orderBy('created_at','asc')->get();
//    $messages=\App\Message::paginate(4);
//    return view('messages',[
//       'messages'=> $messages
//    ]);
//});

Route::get('/messages','MessageController@show');
Route::post('/create_message','MessageController@create');
Route::get('/create_message','MessageController@showCreateMessageView');
