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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/post', function() {
//     $user = factory(\App\User::class)->create();
//     $user->posts()->create([
//         'title' => 'My Post',
//         'body' => 'My name is Bone'
//     ]);
//     $user->posts->first()->title = 'Change Name';
//     $user->push();
//     dd(App\Post::all());
// });

// Route::get('/role', function(){
//     $user = App\User::first();
//     $roles = App\Role::all();
//     $user->roles()->syncWithoutDetaching([1,4]);
//     // $user->roles()->sync([2,4]);
//     // $user->roles()->detach(1);
//     // $user->roles()->attach($roles);
//     dd($roles);
// });

Route::get('/pivot', function(){
    $user = App\User::first();
    $user->roles()->sync([
        1 => [
            'name' => 'Bone Kyaw'
        ],
        3 => [
            'name' => 'Moe Moe'
        ]
        ]);
    dd($user->roles->first()->pivot->name);
});
