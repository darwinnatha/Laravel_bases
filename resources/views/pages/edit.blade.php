@extends('include.master')
@section('title')
    Edition
@endsection

@section('contenu')

    @if(count($errors)>0)
        <div class="alert alert-success">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('/edit', [$product->id])}}" method="POST" class="form-horizontal">
        {{csrf_field()}}
        @method('PUT')
        <div class="form-group">
            <label>Product</label>
            <input type="text" name="product_name" value="{{$product->nom_produit}}" placeholder="Product Name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="text" name="product_price" value="{{$product->prix_produit}}" placeholder="Product Price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Product description</label>
            <textarea name="product_description" required class="form-control" cols="30" rows="10">{{$product->description_produit}}</textarea>
        </div>
        <input type="submit" value="Update Product" class="btn btn-primary">
    </form>

@endsection


