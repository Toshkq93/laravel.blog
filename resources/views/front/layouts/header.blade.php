 <div class="header_top">
            <div class="wrap">
                <div class="header-top-left">
                    <div class="logo">
                        <a href="{{ route('home') }}"><h1>Book</h1>
                            <h2>The Blog</h2>
                        </a>
                    </div>
<div class="menu">
    @include('front.menu.menu')
</div>
                    <div class="clear"></div>
                </div>
                <div class="header-top-right">

                    <div class="social-icons">
@auth
<div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Добро пожаловать, {{ \Illuminate\Support\Facades\Auth::user()->name }}</button>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item btn-secondary" href="#">Кабинет</a>
        @if(\Illuminate\Support\Facades\Auth::user()->is_admin)
            <a class="dropdown-item btn-secondary" href="{{ route('admin.index') }}">Админка</a>
        @endif
        <a class="dropdown-item btn-secondary" href="{{ route('logout') }}">Выход</a>
    </div>
</div>
@endauth
@guest
<a href="{{ route('login') }}" class="btn btn-outline-secondary">Вход</a>
<a href="{{ route('signup') }}" class="btn btn-outline-secondary">Регистрация</a>
@endguest
                    </div><br>
    <form class="typeahead" method="get" action="{{ route('search') }}" autocomplete="off">
        <div class="form-group">
            @csrf
            <input type="text" name="q" class="form-control text-box typeahead @error('q') is-invalid  @enderror" id="typeahead" placeholder="Search" autocomplete="off">
        </div>
    </form>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
 <script>
     $(document).ready(function() {
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     var path = "http://laravel.loc";
     /*var posts = new Bloodhound({
         remote: {
             wildcard: '%QUERY',
             url: path + '/search/autocomplite?query=%QUERY'
         },
         datumTokenizer: Bloodhound.tokenizers.whitespace,
         queryTokenizer: Bloodhound.tokenizers.whitespace,
     });
     posts.initialize();
     $('#typeahead').typeahead({
         highlight: true
     },{
         name: 'posts',
         display: 'title',
         data:'_token = <?php /*echo csrf_token() */?>',
         limit: 9,
         source: posts,
     });
     $('#typeahead').bind('typeahead:select', function (ev, posts){
         window.location = path + '/search?q=' + encodeURIComponent(posts.title)
     });*/
         // instantiate the bloodhound suggestion engine
         var posts = new Bloodhound({
             datumTokenizer: function(posts) {
                 return Bloodhound.tokenizers.whitespace(posts.title);
             },
             queryTokenizer: Bloodhound.tokenizers.whitespace,
             remote: {
                 wildcard: '%QUERY',
                 url: path + '/search/autocomplite?query=%QUERY',
             }
         });

// initialize the bloodhound suggestion engine
         posts.initialize();

// instantiate the typeahead UI
         $('#typeahead').typeahead(
             {
                 hint: true,
                 highlight: true,
                 minLength: 1
             },
             {
                 name: 'posts',
                 displayKey: function(posts) {
                     return posts.title;
                 },
                 source: posts.ttAdapter()
             });
     });
 </script>
