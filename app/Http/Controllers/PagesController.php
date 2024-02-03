<?php

namespace App\Http\Controllers;

use Illuminate\Bus\DatabaseBatchRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class PagesController extends Controller
{

    public function home(){
        return view('pages.home');
    }

    public function  apropos(){
        return view('pages.apropos');
    }

    public function service()

    {
        //$produits = DB::table("products")->paginate(1);
        $produits = Product::All();
        return view('pages.service')->with("produits", $produits);
    }

    public function propriete($id)
    {
        $produit = Product::find($id);
        return view('pages.show')->with('produit', $produit);
    }


}
?>
