@extends('layouts.main')

@section('content')
    <section class="py-5">
        <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="mb-3">
                    <label for="formFile" class="form-label">File Image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection

