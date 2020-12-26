@extends('admin.layouts.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Список статей</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Добавить статью</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>title</th>
                <th>content</th>
                <th>category</th>
                <th style="width: 40px">description</th>
                <th>Created_at</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->category->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                       class="btn btn-info btn-sm float-left mr-1">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <form
                        action="{{ route('posts.destroy', ['post' => $post->id]) }}"
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
        {{ $posts->links() }}
    </div>
</div>
@endsection
