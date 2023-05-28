@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('category.store') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

