@include('header')

<h1>Categories</h1>

@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
    <ul>
        @foreach($category->products as $product)
            CATEGORY:{{$product->categoryId}}
            <li>{{ $product->name }}
            <li>{{ $product->price }}€</li>
    </ul>
            <br>
    <ul>
            <img src="{{ $product->image }}" alt="product image" width="200px">
            <li><a href="{{ route('show.product', $product->id) }}"></a></li>
        @endforeach
    </ul>
@endforeach
