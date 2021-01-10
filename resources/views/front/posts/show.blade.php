@extends('front.layouts.layout')

@section('content')
<div class="main">
    <div class="content">
        <div class="box1">
            <h3>{{ $post->title }}</h3>
            <span>{{ \App\Http\Helpers\PostHelper::getPostDate($post->created_at) }}<span class="comments">8 Comments</span></span>
            <div class="blog-img">
                <div class="view-back">
                    <span class="views" title="views">(566)</span>
                    <span class="likes" title="likes">(124)</span>
                    <span class="link" title="link">(24)</span>
                    <a href="#"> </a>
                </div>
                <img src="{{ \App\Http\Helpers\PostHelper::getImage($post->image) }}" style="width: 100%; height: 100%">
            </div>
            <div class="blog-data">
                <p style="text-align: justify">{!! $post->content !!}</p>
            </div>
            <div class="clear"></div>
        </div>
        <!----------------  Comment Area -------------------->
        <div class="box comment">
            <h2><span>(0)</span> Comment's</h2>
            <ul class="list">
                <li>
                    <div class="preview"></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="preview"></div>
                    <div class="data">
                        <div class="title">Jake Sully <a href="#"> June 20, 2013</a></div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="clear"></div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="comments-area">
            <h3><img src="images/r-blog.png" title="comment">Leave a comment</h3>
            <form>
                <p>
                    <label>Name</label>
                    <span>*</span>
                    <input type="text" value="">
                </p>
                <p>
                    <label>Email</label>
                    <span>*</span>
                    <input type="text" value="">
                </p>
                <p>
                    <label>Website</label>
                    <input type="text" value="">
                </p>
                <p>
                    <label>Subject</label>
                    <span>*</span>
                    <textarea></textarea>
                </p>
                <p>
                    <input type="submit" value="Post">
                </p>
            </form>
        </div>
        <div class="clear"> </div>
        <!----------------- End Comment Area ----------------->
    </div>
    <div class="clear"></div>
</div>
@endsection
