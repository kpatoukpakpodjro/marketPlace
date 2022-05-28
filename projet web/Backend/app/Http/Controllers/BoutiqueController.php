<?php

namespace App\Http\Controllers;

use App\Models\boutique;
use App\Http\Requests\StoreboutiqueRequest;
use App\Http\Requests\UpdateboutiqueRequest;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    //la methodes qui retourne toutes les boutique
    public function getBoutiques(){
        return response()->json(boutique::all(),200) ;
    }
    //la methode qui retourne un boutique par son id
    public function getBoutiqueById($id){
        $boutique = boutique::find($id) ;
        if(is_null($boutique)){
            return response()->json(['message'=>'boutique introuvable'],404) ;
        }
        return response()->json(boutique::find($id),200) ;
    }
    //ajouter une boutique a la marketPlace
    public function addBoutique(Request $request){
        $boutique = boutique::create($request->all()) ;
        return response($boutique,201) ;
    }
    //mettre a jour une boutique
    public function updateBoutique(Request $request , $id){
        $boutique = boutique::find($id) ;
        if(is_null($boutique)){
            return response()->json(['message'=>'boutique interouvable'],404) ;
        }
        $boutique->update($request->all()) ;
        return response($boutique,201) ;
    }
    //supprimer un produit
    public function deleteBoutique(Request $request , $id){
        $boutique = boutique::find($id) ;
        if(is_null($boutique)){
            return response()->json(['message'=>'boutique interouvable'],404) ;
        }
        $boutique->delete() ;
        return response(null,204) ;
    }
}
