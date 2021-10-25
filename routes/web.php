<?php
use App\Http\Controllers\DropzoneController;
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

Route::get('/', [DropzoneController::class, 'dropzone']);
Route::post('dropzone/store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');