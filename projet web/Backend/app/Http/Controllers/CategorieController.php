<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Http\Requests\StorecategorieRequest;
use App\Http\Requests\UpdatecategorieRequest;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //la methodes qui retourne toutes les categories
    public function getCategtorie(){
        return response()->json(categorie::all(),200) ;
    }
    //la methode qui retourne une categorie par son id
    public function getCategorieById($id){
        $categorie = categorie::find($id) ;
        if(is_null($categorie)){
            return response()->json(['message'=>'categorie introuvable'],404) ;
        }
        return response()->json(categorie::find($id),200) ;
    }
    //ajouter une categorie
    public function addCategorie(Request $request){
        $categorie = categorie::create($request->all()) ;
        return response($categorie,201) ;
    }
    //mettre a jour une categorie
    public function updateCategorie(Request $request , $id){
        $categorie = categorie::find($id) ;
        if(is_null($categorie)){
            return response()->json(['message'=>'categorie interouvable'],404) ;
        }
        $categorie->update($request->all()) ;
        return response($categorie,201) ;
    }
    //supprimer une categorie
    public function deleteCategorie(Request $request , $id){
        $categorie = categorie::find($id) ;
        if(is_null($categorie)){
            return response()->json(['message'=>'categorie interouvable'],404) ;
        }
        $categorie->delete() ;
        return response(null,204) ;
    }
}
