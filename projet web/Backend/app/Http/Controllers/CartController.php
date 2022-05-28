<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use App\Models\produit;



class CartController extends Controller
{


    public function add(produit $produit)
    {
        //dd($produit) ;
        $produit =produit::find($produit) ;
        return view('cart.index',compact('produit')) ;
        // add the product to cart
        cart::session(auth()->id())->add(array(
            'id' => $produit->id,
            'nom' => $produit->name,
            'description'=> $produit->description,
            'prix' => $produit->price,
            'qtite' => 1,
            'attributes' => array(),
            'associatedModel' => $produit
        ));

        return redirect()->route('cart.index');

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecartRequest  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecartRequest $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $cart)
    {
        //
        //$a = produit::find($cart) ;
        //produit::find($cart)->forceDelete() ;
        //produit::destroy($cart) ;
        $deleted = produit::where('id', $cart->id)->delete();
        return back() ;
    }
}
