<?php

use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PortfolioController;
use App\Http\Controllers\dashboard\BlogController;
use App\Http\Controllers\dashboard\DashboardController;
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
Route::get("addCart/{id}", [ShopController::class, 'addCart'])->name("addCart");
Route::get("cart", [ShopController::class, 'cart'])->name("cart");
Route::get("payment", [ShopController::class, 'payment'])->name("payment");


/*
|--------------------------------------------------------------------------
| Rotas para o painel de administracao
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/dashboard/'], function(){

    Route::get('/', [DashboardController::class, 'index'])->name("dashboard")->middleware("auth");
    Route::get('home', [DashboardController::class, 'index'])->name("dashboard")->middleware("auth");
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('blog', BlogController::class)->middleware("auth");
    Route::resource('user', UserController::class)->middleware("auth");

});

/*
|--------------------------------------------------------------------------
| Rota para o Login
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', [DashboardController::class, 'formLogin'])->name("login");
Route::post('logar', [DashboardController::class, 'logar'])->name("logar");
Route::get('logout', [DashboardController::class, 'logout'])->name("logout");