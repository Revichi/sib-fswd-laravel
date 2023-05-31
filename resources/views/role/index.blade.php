@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container-fluid px-4">
                        <h1 class="mt-4">Role</h1>
                        <a class="btn btn-primary" href="{{ route('role.create') }}">Tambah</a>
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
                                                    <td>Role ID</td>
                                                    <td>Aksi</td>                                           
                                                </tr>
                                                @foreach($role as $product)
                                                <tr>
                                                    <td>{{$loop ->iteration}}</td>
                                                    <td>{{$product ->name}}</td>
                                                    <td>{{ $product ->id }}</td>
                                                    <td>
                                                        <a class="btn btn-warning" href="{{ route('role.edit',$product->id) }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ route('role.delete',$product->id) }}">Delete</a>
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

