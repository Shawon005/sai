<?php
use App\Http\Controllers as Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','admin']], function (){
    Route::resource('Admin', ADMIN\AdminController::class);
    Route::get('/login',[ADMIN\AdminController::class, 'index'])->name('login');
});
