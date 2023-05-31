@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('role.update',$role->id) }}" method="post" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

