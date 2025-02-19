<li>
    {{ $category->title }}
    @if ($category->children->count())
        <ul>
            @foreach($category->children as $child)
                @include('category.category', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>
