<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use App\Post;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create',function(){
//
//   $user = User::findOrFail(1);
//
//   //$post = new Post(['title'=>'My first post with Edwin Diaz','body'=>'I love Laravel, with Edwin Diaz']);
//
//   $user->posts()->save(new Post(['title'=>'My first post with Edwin Diaz 2','body'=>'I love Laravel, with Edwin Diaz 2']));
//
// });
//
// Route::get('/read', function(){
//
//   $user = User::findOrFail(1);
//
//   foreach($user->posts as $post){
//
//     echo $post->title . "<br>";
//
//   }
//
// });

Route::get('/update',function(){

  $user = User::find(1);

//  $user->posts()->whereId(1)->update(['title'=>'I love laravel','body'=>'This is awesome, thank you Ediwn']);

   $user->posts()->where('id','=',2)->update(['title'=>'I love laravel 2','body'=>'This is awesome, thank you Ediwn 2']);
});

Route::get('/delete', function(){

  $user = User::find(1);

  //$user->posts()->whereId(1)->delete();
  $user->posts()->delete();

});
