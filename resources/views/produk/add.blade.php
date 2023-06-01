@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('produk.store') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category </label>
                <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id">
                    @foreach($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" name="name" placeholder="Nama Produk">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="emailHelp" name="price" placeholder="Price">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sale Price</label>
                <input type="text" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" aria-describedby="emailHelp" name="sale_price" placeholder="Sale Price">
                @error('sale_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Brands</label>
                <input type="text" class="form-control @error('brands') is-invalid @enderror" id="brands" aria-describedby="emailHelp" name="brands" placeholder="Brands">
                @error('brands')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rating</label>
                <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" aria-describedby="emailHelp" name="rating" placeholder="Rating">
                @error('rating')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
