<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //

    public function add()
    {
        return view('pages.product_form');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);
//        print_r($request->toArray());
        $product = new Product();
        $product->nom_produit = $request->input("product_name");
        $product->prix_produit = $request->input("product_price");
        $product->description_produit = $request->input("product_description");
        $product->save();

        return redirect(url("/show", [$product->id]))->with("status", "Le produit ".$request->product_name."a été crée avec succès.");
    }

    public function delete($id){
        $product = new Product();
        $product_delete = $product::find($id);
        $product_delete->delete();

        return redirect("/services")->with("status", "Le produit ".$product_delete->product_name."a été supprimé avec succès.");
    }

    public function editprod($id)
    {

        $product = Product::find($id);


        return view('pages.edit')->with('product', $product);
    }

    public function edit($id, Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);

        $product = Product::find($id);
        $product->nom_produit = $request->product_name;
        $product->prix_produit = $request->product_price;
        $product->description_produit = $request->product_description;

        $product->update();
        return redirect(url('/show', [$product->id]))->with("status", "Le produit ".$product->product_name."a été modifie avec succès.");;
    }
}
