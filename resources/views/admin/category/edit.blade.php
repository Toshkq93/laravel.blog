@extends('admin.layouts.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактирование категории:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('categories.update', ['category' => $category->id]) }}">
            <div class="card-body">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="name" name="title" value="{{ $category->title }}">
                </div>
                <div class="form-group">
                    <select name="parent_id" class="form-control">
                        <option value="">-- без родительской категории --</option>
                        @include('admin.category.create_form')
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
@endsection
