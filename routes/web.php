<?php

use App\Models\User;
use Illuminate\Http\Request;



//WELCOME
Route::get('/', function () {
    return view('welcome');
});

//LOGIN
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'getLogin'])->name('login.getLogin');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('login.postLogin');


// REGISTER
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'getRegister'])->name('register.getRegister');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'postRegister'])->name('register.postRegister');
// 

//HOME
Route::group(['middleware' => 'userAuth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home.home');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.edit');
    Route::post('/update', [App\Http\Controllers\UserController::class, 'update'])->name('update.update');
    Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete.delete');
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logoutUser'])->name('logout.logoutUser');

});

// SEARCH
Route::get('/search', function(){
    $q = Input::get('query');
    if($q != ""){
        $users = User ::where('name', 'LIKE', '%' . $q .'%')->orWhere('email', 'LIKE', '%' . $q .'%')->orWhere('user_type', 'LIKE', '%' . $q .'%')->get();
        if(count($users) > 0){
            return view('home')->with(['users'=> $users, 'query'=>$q]);
        }
        else{
            return view('home')->with('message', "No users found");
        }
    }
    else{
        return view('home')->with('message',"Your search is empty!");
    }
});