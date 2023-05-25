@extends('layouts.mainlanding')

@section('content')
    <section class="py-5">
        <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
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
                                                    <td>Price</td>
                                                    <td>Sale Price</td>                                                  
                                                </tr>
                                                @foreach($data as $product)
                                                <tr>
                                                    <td>{{$loop -> iteration}}</td>
                                                    <td>{{ $product['name']}}</td>
                                                    <td>{{ $product['price']}}</td>
                                                    <td>{{ $product['sale_price']}}</td>
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

