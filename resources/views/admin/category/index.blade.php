@extends('admin.layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список категорий</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>slug</th>
                    <th>parent_id</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    @php
                    @endphp
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->parent_id }}</td>
                        <td>
                            <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                               class="btn btn-info btn-sm float-left mr-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form
                                action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                method="post" class="float-left">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Подтвердите удаление')">
                                    <i
                                        class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
