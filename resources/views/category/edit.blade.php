@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('category.update',$category->id) }}" method="post" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

