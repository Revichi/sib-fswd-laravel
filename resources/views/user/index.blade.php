@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container-fluid px-4">
                        <h1 class="mt-4">User</h1>
                        <a class="btn btn-primary" href="{{ route('user.create') }}">Tambah</a>
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
                                                    <td>Role ID</td>
                                                    <td>Name</td>
                                                    <td>Email</td>
                                                    <td>Phone</td>
                                                    <td>Aksi</td>                                           
                                                </tr>
                                                @foreach($user as $product)
                                                <tr>
                                                    <td>{{$loop ->iteration}}</td>
                                                    <td>{{$product ->role_id}}</td>
                                                    <td>{{$product ->name  }}</td>
                                                    <td>{{$product ->email}}</td>
                                                    <td>{{$product ->phone}}</td>
                                                    <td>
                                                        <a class="btn btn-warning" href="{{ route('user.edit',$product->id) }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ route('user.delete',$product->id) }}">Delete</a>
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

