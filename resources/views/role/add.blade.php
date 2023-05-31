@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('role.store') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role Name" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

