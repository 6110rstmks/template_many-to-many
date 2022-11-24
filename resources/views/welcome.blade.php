<x-layout>
    <form method="post" action="{{ route('category.store' )}}">
        @csrf
        <p>add category</p>
        <input type="text" name="name" style="border:1px black solid">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">add</button>
    </form>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a class="text-xl" href="{{ route('show', $category) }}">{{ $category->name }}</a>
                <span class="text-yellow-700">（{{ $category->products->count()}}）</span>
                <form method="post" action="{{ route('category.destroy', $category) }}">
                    @csrf
                    @method('delete')
                    <span class="dlt-btn">[DELETE]</span>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>

