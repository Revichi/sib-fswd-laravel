@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('produk.store',$produk->id) }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category </label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $produk->name }}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{ $produk->price }}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sale Price</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sale_price" value="{{ $produk->sale_price }}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Brands</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="brands" value="{{ $produk->brands }}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rating</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rating" value="{{ $produk->rating }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

