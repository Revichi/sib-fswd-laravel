@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('user.store') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Role </label>
                <select class="form-select" aria-label="Default select example" name="role_id">
                    @foreach($role as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role Name" required>
                </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

