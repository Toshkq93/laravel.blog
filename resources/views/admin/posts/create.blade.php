@extends('admin.layouts.layout')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Добавление статьи:</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" rows="5" placeholder="content" name="content" id="content">{{ old('content') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" rows="5" placeholder="description" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control" id="">
                    @foreach($categories as $key => $category)
                        <option value="{{ $key }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image: </label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" id="image"
                               class="custom-file-input">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>
</div>
@endsection
