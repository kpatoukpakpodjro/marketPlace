<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Models\User ;
use App\Http\Controllers\ProduitController ;
use App\Http\Controllers\BoutiqueController ;
use App\Http\Controllers\CategorieController ;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users/get-data','UserController@getData')->middleware('CORS');

Route::get('users', function(){
    return User::all();
});

Route::group(['namespace'=>'Api\Auth'], function(){
    Route::post('/login', 'AuthentificationController@login');
    Route::post('/logout', 'AuthentificationController@logout')->middleware('auth:api');
    Route::post('/register', 'RegisterController@register');
    Route::post('/forgot', 'ForgotPasswordController@forgot');
    Route::post('/reset', 'ForgotPasswordController@reset');
});

/********les routes pour le produit *******/

//la routes all produits
Route::get('produits',[App\Http\Controllers\ProduitController::class, 'getProduits']) ;
//recuperer produit par id
Route::get('produit/{id}',[App\Http\Controllers\ProduitController::class, 'getProduitById']) ;
//ajouter produit route
Route::post('addProduit',[App\Http\Controllers\ProduitController::class, 'addProduit']) ;
//pour mettre a jour un produit
Route::put('updateProduit/{id}',[App\Http\Controllers\ProduitController::class, 'updateProduit']) ;
//pour supprimer un artile
Route::delete('deleteProduit/{id}',[App\Http\Controllers\ProduitController::class, 'deleteProduit']) ;

/*********les routes pour la boutique *******/

//la routes all boutique
Route::get('Boutique',[App\Http\Controllers\BoutiqueController::class, 'getBoutiques']) ;
//recuperer une boutique par son id
Route::get('Boutique/{id}',[App\Http\Controllers\BoutiqueController::class, 'getBoutiqueById']) ;
//ajouter une boutique
Route::post('addBoutique',[App\Http\Controllers\BoutiqueController::class, 'addBoutique']) ;
//pour mettre a jour un boutique
Route::put('update/{id}',[App\Http\Controllers\BoutiqueController::class, 'updateBoutique']) ;
//pour supprimer un boutique
Route::delete('delete/{id}',[App\Http\Controllers\BoutiqueController::class, 'deleteBoutique']) ;


/******les routes pour les categories ********/

Route::get('Categorie',[App\Http\Controllers\CategorieController::class, 'getCategtorie']) ;
//recuperer une Categorie par son id
Route::get('Categorie/{id}',[App\Http\Controllers\CategorieController::class, 'getCategorieById']) ;
//ajouter une Categorie
Route::post('addCategorie',[App\Http\Controllers\CategorieController::class, 'addCategorie']) ;
//pour mettre a jour une Categorie
Route::put('update/{id}',[App\Http\Controllers\CategorieController::class, 'updateCategorie']) ;
//pour supprimer une Categorie
Route::delete('delete/{id}',[App\Http\Controllers\CategorieController::class, 'deleteCategorie']) ;
