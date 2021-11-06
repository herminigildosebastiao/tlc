<?php

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

    Route::get('/', [DashboardController::class, 'index'])->name("dashboard");
    Route::get('home', [DashboardController::class, 'index'])->name("dashboard");
    //Route::get('blog', [DashboardController::class, 'blog'])->name("dashboard/blog");
    //Route::get('portfolio', [DashboardController::class, 'portfolio'])->name("dashboard/portfolio");
    /*Route::get('login', [PainelController::class, 'formLogin']);
    Route::get('logout', [PainelController::class, 'logout']);
    Route::post('login/do', [PainelController::class, 'login']);
    Route::get('dashboard', [PainelController::class, 'dashboard']);
    Route::get('noticias', [PainelController::class, 'noticias']);
    Route::get('galeria', [PainelController::class, 'galeria']);
    Route::get('newsletter', [PainelController::class, 'email']);
    Route::get('perfil', [PainelController::class, 'perfil']);*/

    /*Route::resource('user', UserController::class);
    Route::resource('password', SenhaController::class);*/
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('blog', BlogController::class);
    //Route::resource('portfolio', GaleriasController::class);

});