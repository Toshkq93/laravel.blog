<div class="popular-post">
        <h3>New posts</h3>
            @foreach($popular_posts as $post)
        <div class="post-grid">
            <a href="{{ route('post.article', ['id' => $post->id]) }}"><img src="{{ $post->getImage() }}" alt=""/></a>
            <p class="popularPost">{{ $post->description }}<a href="{{ route('post.article', ['id' => $post->id]) }}">[...]</a></p>
            <div class="clear"> </div>
        </div>
            @endforeach
        <div class="clear"></div>
    </div>

    <div class="latest_photos">
        <h3>Latest Photos</h3>
        <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
        </script>
        <div class="gallery-bottom">
            <div class="section group">
                @foreach($latest_images as $image)
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
                        <img src="{{'uploads/' . $image}}" alt="" class="img-responsive">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="clear"></div>
</div>
