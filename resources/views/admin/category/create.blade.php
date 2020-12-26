@extends('admin.layouts.layout')
@section('content')
    <div class="container">

        <form action="{{ route('categories.store') }}" method="post">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Наименование категории">
            </div>

            <div class="form-group">
                <select name="parent_id" class="form-control">
                    <option value="">-- без родительской категории --</option>
                    @include('admin.category.create_form')
                </select>
            </div>

            <hr>

            <button type="submit" class="btn btn-primary">Сохранить</button>

        </form>

    </div>
@endsection
