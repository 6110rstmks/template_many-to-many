<x-layout>
    <div class="back-link">
        &laquo; <a href="{{ route('home') }}">Back</a>
    </div>

    <h1>{{ $category->name }}</h1>
    <p>ADD Product</p>
    <form method="post" action="{{ route('product.store', $category) }}">
        @csrf
        <input type="text" name="name">
    </form>

    <ul>
        @foreach ($category->products as $product)
        <li class="post-single">
            <span>{{ $product->name }}</span>
            @foreach ($product->categories as $tagCategory)
            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-zinc-600 bg-zinc-200 uppercase last:mr-0 mr-1">
                {{ $tagCategory->name }}</span>
            @endforeach
            <hr>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Add category<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    @foreach ($dropDownCategories as $dropDownCategory)
                        <li class="border-2">
                            <div class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex">
                                <form method="post">
                                    @if ($dropDownCategory->products()->exists())
                                        <input type="checkbox" data-category="{{ $category->id }}" data-product="{{ $product->id }}" data-dropdown="{{ $dropDownCategory->id }}" checked>
                                    @else
                                    <input type="checkbox" data-category="{{ $category->id }}" data-product="{{ $product->id }}" data-dropdown="{{ $dropDownCategory->id }}">

                                    @endif
                                </form>
                                <span class="text-2xl">{{ $dropDownCategory->name }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
        @endforeach
    </ul>



</x-layout>
