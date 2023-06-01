@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container-fluid px-4">
                        <h1 class="mt-4">Brands</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Brands</li>
                        </ol>
                        <a class="btn btn-primary" href="{{ route('brands.create') }}">Tambah</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <<table class="table">
                                                <tr  class="table-dark">
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Aksi</th>                                   
                                                </tr>
                                                @foreach ($brands as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>
                                                        <a class="btn btn-warning" href="{{ route('brands.edit',$item->id) }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ route('brands.delete',$item->id) }}">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                    </table>
                            </div>
                        </div>
                    </div>
    </section>
@endsection

