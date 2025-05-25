@extends("backend.layout.master")


@section("title", "Category")


@section("master_content")
<div class="row justify-content-center">
    <div class="col-md-6">
        <h4>Category</h4>
        {{-- @php

            dump($errors->all());
        @endphp --}}
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-2">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{ request()->get('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
              <div class="my-2">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Category title">
            </div>

                <div class="my-2">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" >
                  @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="my-2">
                <button class="btn btn-sm btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

