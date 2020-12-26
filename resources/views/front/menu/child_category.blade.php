@foreach($categories as $category)
    @if($category->children->count())
        <li class="dropdown">
            <a class="dropdown-toggle" href="{{ route('category.show', ['slug' => $category->slug]) }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $category->title }}
            </a>
            <ul class="dropdown-menu dropdown">
                @include('front.menu.child_category', ['categories' => $category->children, 'is_child' => true])
            </ul>
        </li>
    @else
        @isset($is_child)
            <li><a href="{{ route('category.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a></li>
            @continue
        @endisset
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
        </li>
    @endif
@endforeach
