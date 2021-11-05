<?php

use App\Http\Controllers\shop\ShopController;
use App\Http\Controllers\site\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas para o website generico
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [SiteController::class, 'index'])->name("home");
Route::get("home", [SiteController::class, 'index'])->name("home");
Route::get("about", [SiteController::class, 'about'])->name("about");
Route::get("portfolio", [SiteController::class, 'portfolio'])->name("portfolio");
Route::get("portDetails/{id}", [SiteController::class, 'portDetails'])->name("portDetails");
Route::get("blog", [SiteController::class, 'blog'])->name("blog");
Route::get("blogDetails/{id}", [SiteController::class, 'blogDetails'])->name("blogDetails");
Route::get("contact", [SiteController::class, 'contact'])->name("contact");


/*
|--------------------------------------------------------------------------
| Rotas para o website especificamente a shop
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("shop", [ShopController::class, 'shop'])->name("shop");
Route::get("shop/product/{id}", [ShopController::class, 'product'])->name("product");
Route::get("cart", [ShopController::class, 'cart'])->name("cart");
Route::get("payment", [ShopController::class, 'payment'])->name("payment");