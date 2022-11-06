<x-layout>
    <form method="post" action="{{ route('category.store' )}}">
        @csrf
        <p>add category</p>
        <input type="text" name="name" style="border:1px black solid">
        <button>add</button>
    </form>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('show', $category) }}">{{ $category->name }}</a>
                <span>（{{ $category->products->count()}}）</span>
            </li>
        @endforeach
    </ul>
</x-layout>

