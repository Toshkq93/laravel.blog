@extends('front.layouts.layout')

@section('content')
        @foreach($posts as $post)
        <div class="box1">
            <h3><a href="{{ route('post.article', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
            <span>{{ $post->getPostDate() }}<span class="comments">Category: {{ $post->category->title }}</span></span>
            <div class="view">
                <div class="view-back">
                    <span class="views" title="views">(566)</span>
                    <span class="likes" title="likes">(124)</span>
                    <span class="link" title="link">(24)</span>
                    <a href="{{ route('post.article', ['id' => $post->id]) }}"> </a>
                </div>
                <a href="{{ route('post.article', ['id' => $post->id]) }}"><img src="{{ $post->getImage() }}"></a>
            </div>
            <div class="data">
                <p style="text-align: justify">{{ $post->description }}</p>
                <span><a href="{{ route('post.article', ['id' => $post->id]) }}">Continue reading >>></a></span>
            </div>
            <div class="clear"></div>
        </div>
        @endforeach
        <div class="page_links">
            <div class="page_numbers">
                <ul>
                    {{ $posts->links() }}
                </ul>
            </div>
            <div class="clear"></div>
        </div>
@endsection
