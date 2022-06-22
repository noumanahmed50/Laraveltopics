<?php

use App\Http\Controllers\CrudController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravelTopicsController;


Route::get('/', function () {
    return view('main');
});

//laravel topics

Route::get('add-topic',[laravelTopicsController::class,'topics'])->name('add-topic');
Route::post('submit-topic',[laravelTopicsController::class,'submit_topics'])->name('submit-topic');

Route::get('read-topics',[laravelTopicsController::class,'read_topics'])->name('read-topics');
Route::get('edit-topic/{id}',[laravelTopicsController::class,'edit_topics'])->name('edit-topic');
Route::post('update-topic', [laravelTopicsController::class,'update_topics'])->name('update-topic');
Route::get('delete-topic/{id}',[laravelTopicsController::class,'delete_topics'])->name('delete-topic');



//Cruds routes




Route::get('user-list',[CrudController::class,'readdata'])->name('user-list');

Route::get('user-form',[CrudController::class,'user_form'])->name('user-form');


Route::post('user-submit',[CrudController::class,'user_submit'])->name('user-submit');


 Route::get('user-edit/{id}',[CrudController::class,'user_edit'])->name('user-edit');

 Route::post('user-update', [CrudController::class,'user_update'])->name('user-update');

Route::get('user-deleted/{id}',[CrudController::class,'user_delete'])->name('user-deleted'); 

//relation ship routes
 Route::get('/posts', function (){
    //  $tag =\App\Tag::first();
     $blog =\App\blog::with('tags')->first();
$blog->tags()->attach([1,2,3] );
    //  \App\Tag::create([
    //      'name'=>'laravel',
    //      'price'=>'No 1'
    //  ]);
    //  \App\Tag::create([
    //     'name'=>'Vuejs',
    //     'price'=>'No 1'
    // ]);
    // \App\Tag::create([
    //     'name'=>'Php',
    //     'price'=>'No 1'
    // ]);
    // \App\Tag::create([
    //     'name'=>'Javascript',
    //     'price'=>'No 1'
    // ]);
//     \App\Post::create([
//         'user_id' =>1,
//         'title' =>'Post Title 1'
//     ]);
//     \App\Post::create([
//         'user_id' =>2,
//         'title' =>'Post Title 1'
//     ]);
 });



//Auth Routes

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Validation Routes
Route::get('validation',[laravelTopicsController::class,'validation_form']);
Route::post('save', [laravelTopicsController::class,'save_data']);
//upload a file
Route::post('upload-file', [laravelTopicsController::class,'upload_file']);
                
                //MiddleWare

//middleware global
Route::view('noaccess', 'laravelTopics.noaccess');

//group middleware
Route::group(['middleware'=>['gpnomi']],function(){
  
});

//route middleware
// Route::get('/home', 'HomeController@index')->middleware('routemid');

//Query Builder
Route::get('query-insert',[laravelTopicsController::class,'query_insert']);
Route::get('query-read',[laravelTopicsController::class,'query_read']);
Route::get('query-update',[laravelTopicsController::class,'query_update']);
Route::get('query-search',[laravelTopicsController::class,'query_search']);
Route::get('query-delete',[laravelTopicsController::class,'query_delete']);

//join
Route::get('join',[laravelTopicsController::class,'join']);
// //mutator
// Route::post('mutator',[laravelTopicsController::class,'submit_topics']);


//relations one to one ,one to many
//get wala route bnao

//route model binding
Route::get("binding/{key:topic_name}",[laravelTopicsController::class,'bindng']);
//markdown mail template
Route::get("mail",[laravelTopicsController::class,'mail']);

