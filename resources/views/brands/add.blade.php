@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('brands.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Brand Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Brand name" >
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
