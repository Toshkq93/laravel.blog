@extends('front.layouts.layout')

@section('content')
    @if($posts->count())
    <h2>Search: {{ $q }}</h2>

        @foreach($posts as $post)
        <div class="box1">
            <h3><a href="{{ route('post.article', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
            <span>{{ \App\Http\Helpers\PostHelper::getPostDate($post->created_at) }}<span class="comments">Category: {{ $post->category->title }}</span></span>
            <div class="view">
                <div class="view-back">
                    <span class="views" title="views">(566)</span>
                    <span class="likes" title="likes">(124)</span>
                    <span class="link" title="link">(24)</span>
                    <a href="{{ route('post.article', ['id' => $post->id]) }}"> </a>
                </div>
                <a href="{{ route('post.article', ['id' => $post->id]) }}"><img src="{{ \App\Http\Helpers\PostHelper::getImage($post->image) }}"></a>
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
                    {{ $posts->appends(['q' => request()->q])->links() }}
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    @else
        По вашему запросу ничего не найдено
    @endif
@endsection
