<li>
    <a href="{{ route('category.show', $category->id) }}"> {{ $category->title }}</a>
    @if ($category->children->count())
        <ul>
            @foreach($category->children as $child)
                <a href="{{ route('category.show', $category->id) }}">  @include('category.category', ['category' => $child])</a>

            @endforeach
        </ul>
    @endif
</li>
