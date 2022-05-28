<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Http\Requests\StoreproduitRequest;
use App\Http\Requests\UpdateproduitRequest;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //la methodes qui retourne tout les produit
    public function getProduits(){
        return response()->json(produit::all(),200) ;
    }
    //la methode qui retourne un produit par son id
    public function getProduitById($id){
        $produit = produit::find($id) ;
        if(is_null($produit)){
            return response()->json(['message'=>'produit introuvable'],404) ;
        }
        return response()->json(produit::find($id),200) ;
    }
    //ajouter produit
    public function addProduit(Request $request){
        $produit = produit::create($request->all()) ;
        return response($produit,201) ;
    }
    //mettre a jour un produit
    public function updateProduit(Request $request , $id){
        $produit = produit::find($id) ;
        if(is_null($produit)){
            return response()->json(['message'=>'produit interouvable'],404) ;
        }
        $produit->update($request->all()) ;
        return response($produit,201) ;
    }
    //supprimer un produit
    public function deleteProduit(Request $request , $id){
        $produit = produit::find($id) ;
        if(is_null($produit)){
            return response()->json(['message'=>'produit interouvable'],404) ;
        }
        $produit->delete() ;
        return response(null,204) ;
    }
}
