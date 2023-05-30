<?php

use App\Http\Controllers\DashboardController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// King Insoles
Route::get('kingInsoles', [\App\Http\Controllers\KingInsolesController::class, 'index'])->name('kingInsoles.index');
Route::get('kingInsoles/create', [\App\Http\Controllers\KingInsolesController::class, 'create'])->name('kingInsoles.create');
Route::post('kingInsoles', [\App\Http\Controllers\KingInsolesController::class, 'store'])->name('kingInsoles.store');
Route::get('kingInsoles/{id}/edit', [\App\Http\Controllers\KingInsolesController::class, 'edit'])->name('kingInsoles.edit');
Route::put('kingInsoles/{id}', [\App\Http\Controllers\KingInsolesController::class, 'update'])->name('kingInsoles.update');
Route::delete('kingInsoles/{id}', [\App\Http\Controllers\KingInsolesController::class, 'destroy'])->name('kingInsoles.destroy');

// Cosmic Comfort
Route::get('cosmicComfort', [\App\Http\Controllers\CosmicComfortController::class, 'index'])->name('cosmicComfort.index');
Route::get('cosmicComfort/create', [\App\Http\Controllers\CosmicComfortController::class, 'create'])->name('cosmicComfort.create');
Route::post('cosmicComfort', [\App\Http\Controllers\CosmicComfortController::class, 'store'])->name('cosmicComfort.store');
Route::get('cosmicComfort/{id}/edit', [\App\Http\Controllers\CosmicComfortController::class, 'edit'])->name('cosmicComfort.edit');
Route::put('cosmicComfort/{id}', [\App\Http\Controllers\CosmicComfortController::class, 'update'])->name('cosmicComfort.update');
Route::delete('cosmicComfort/{id}', [\App\Http\Controllers\CosmicComfortController::class, 'destroy'])->name('cosmicComfort.destroy');

// Zerosock
Route::get('zerosock', [\App\Http\Controllers\ZerosockController::class, 'index'])->name('zerosock.index');
Route::get('zerosock/create', [\App\Http\Controllers\ZerosockController::class, 'create'])->name('zerosock.create');
Route::post('zerosock', [\App\Http\Controllers\ZerosockController::class, 'store'])->name('zerosock.store');
Route::get('zerosock/{id}/edit', [\App\Http\Controllers\ZerosockController::class, 'edit'])->name('zerosock.edit');
Route::put('zerosock/{id}', [\App\Http\Controllers\ZerosockController::class, 'update'])->name('zerosock.update');
Route::delete('zerosock/{id}', [\App\Http\Controllers\ZerosockController::class, 'destroy'])->name('zerosock.destroy');

// Longxin Insoles
Route::get('longxinInsoles', [\App\Http\Controllers\LongxinInsolesController::class, 'index'])->name('longxinInsoles.index');
Route::get('longxinInsoles/create', [\App\Http\Controllers\LongxinInsolesController::class, 'create'])->name('longxinInsoles.create');
Route::post('longxinInsoles', [\App\Http\Controllers\LongxinInsolesController::class, 'store'])->name('longxinInsoles.store');
Route::get('longxinInsoles/{id}/edit', [\App\Http\Controllers\LongxinInsolesController::class, 'edit'])->name('longxinInsoles.edit');
Route::put('longxinInsoles/{id}', [\App\Http\Controllers\LongxinInsolesController::class, 'update'])->name('longxinInsoles.update');
Route::delete('longxinInsoles/{id}', [\App\Http\Controllers\LongxinInsolesController::class, 'destroy'])->name('longxinInsoles.destroy');

// Jiangxi Zhicheng Health
Route::get('jiangxiZhicheng', [\App\Http\Controllers\JiangxiZhichengController::class, 'index'])->name('jiangxiZhicheng.index');
Route::get('jiangxiZhicheng/create', [\App\Http\Controllers\JiangxiZhichengController::class, 'create'])->name('jiangxiZhicheng.create');
Route::post('jiangxiZhicheng', [\App\Http\Controllers\JiangxiZhichengController::class, 'store'])->name('jiangxiZhicheng.store');
Route::get('jiangxiZhicheng/{id}/edit', [\App\Http\Controllers\JiangxiZhichengController::class, 'edit'])->name('jiangxiZhicheng.edit');
Route::put('jiangxiZhicheng/{id}', [\App\Http\Controllers\JiangxiZhichengController::class, 'update'])->name('jiangxiZhicheng.update');
Route::delete('jiangxiZhicheng/{id}', [\App\Http\Controllers\JiangxiZhichengController::class, 'destroy'])->name('jiangxiZhicheng.destroy');

// Spotted Socks
Route::get('spottedSocks', [\App\Http\Controllers\SpottedSocksController::class, 'index'])->name('spottedSocks.index');
Route::get('spottedSocks/create', [\App\Http\Controllers\SpottedSocksController::class, 'create'])->name('spottedSocks.create');
Route::post('spottedSocks', [\App\Http\Controllers\SpottedSocksController::class, 'store'])->name('spottedSocks.store');
Route::get('spottedSocks/{id}/edit', [\App\Http\Controllers\SpottedSocksController::class, 'edit'])->name('spottedSocks.edit');
Route::put('spottedSocks/{id}', [\App\Http\Controllers\SpottedSocksController::class, 'update'])->name('spottedSocks.update');
Route::delete('spottedSocks/{id}', [\App\Http\Controllers\SpottedSocksController::class, 'destroy'])->name('spottedSocks.destroy');

// Jianxing Shoe Co.LTD
Route::get('jianxingShoe', [\App\Http\Controllers\JianxingShoeController::class, 'index'])->name('jianxingShoe.index');
Route::get('jianxingShoe/create', [\App\Http\Controllers\JianxingShoeController::class, 'create'])->name('jianxingShoe.create');
Route::post('jianxingShoe', [\App\Http\Controllers\JianxingShoeController::class, 'store'])->name('jianxingShoe.store');
Route::get('jianxingShoe/{id}/edit', [\App\Http\Controllers\JianxingShoeController::class, 'edit'])->name('jianxingShoe.edit');
Route::put('jianxingShoe/{id}', [\App\Http\Controllers\JianxingShoeController::class, 'update'])->name('jianxingShoe.update');
Route::delete('jianxingShoe/{id}', [\App\Http\Controllers\JianxingShoeController::class, 'destroy'])->name('jianxingShoe.destroy');

// JarWrestler
Route::get('jarWrestler', [\App\Http\Controllers\JarWrestlerController::class, 'index'])->name('jarWrestler.index');
Route::get('jarWrestler/create', [\App\Http\Controllers\JarWrestlerController::class, 'create'])->name('jarWrestler.create');
Route::post('jarWrestler', [\App\Http\Controllers\JarWrestlerController::class, 'store'])->name('jarWrestler.store');
Route::get('jarWrestler/{id}/edit', [\App\Http\Controllers\JarWrestlerController::class, 'edit'])->name('jarWrestler.edit');
Route::put('jarWrestler/{id}', [\App\Http\Controllers\JarWrestlerController::class, 'update'])->name('jarWrestler.update');
Route::delete('jarWrestler/{id}', [\App\Http\Controllers\JarWrestlerController::class, 'destroy'])->name('jarWrestler.destroy');

// Post Flag
Route::get('postFlag', [\App\Http\Controllers\PostFlagController::class, 'index'])->name('postFlag.index');
Route::get('postFlag/create', [\App\Http\Controllers\PostFlagController::class, 'create'])->name('postFlag.create');
Route::post('postFlag', [\App\Http\Controllers\PostFlagController::class, 'store'])->name('postFlag.store');
Route::get('postFlag/{id}/edit', [\App\Http\Controllers\PostFlagController::class, 'edit'])->name('postFlag.edit');
Route::put('postFlag/{id}', [\App\Http\Controllers\PostFlagController::class, 'update'])->name('postFlag.update');
Route::delete('postFlag/{id}', [\App\Http\Controllers\PostFlagController::class, 'destroy'])->name('postFlag.destroy');