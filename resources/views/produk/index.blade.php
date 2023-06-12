@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <a class="btn btn-primary" href="{{ route('produk.create') }}">Tambah</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <<table class="table">
                                <form action="">
                                            <th>
                                                <tr  class="table-dark">
                                                    <td>#</td>
                                                    <td>Name</td>
                                                    <td>Kategori</td>
                                                    <td>Price</td>
                                                    <td>Sale Price</td>     
                                                    <td>Brands</td>  
                                                    <td>Rating</td>
                                                    <td>Image</td>
                                                    <td>Aksi</td>                                           
                                                </tr>
                                                @foreach($produk as $product)
                                                <tr>
                                                    <td>{{$loop ->iteration}}</td>
                                                    <td>{{$product ->name}}</td>
                                                    <td>{{$product ->category_id  }}</td>
                                                    <td>{{$product ->price}}</td>
                                                    <td>{{$product ->sale_price}}</td>
                                                    <td>{{$product ->brands}}</td>
                                                    <td>{{$product ->rating}}</td>
                                                    <td>
                                                        @if ($product->image==null)
                                                            <span class="badge bg-primary">No Image</span>
                                                        @else
                                                        <img src="{{ asset('storage/produk/' . $product->image) }}" alt="{{$product ->image}}" style="max-width: 50px">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-warning" href="{{ route('produk.edit',$product->id) }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ route('produk.delete',$product->id) }}">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </th>
                                        </form>
                                    </table>
                            </div>
                        </div>
                    </div>
    </section>
@endsection

