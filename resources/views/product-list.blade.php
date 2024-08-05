@include('header')

<h1>Our Precious Products</h1>

@foreach($products as $product)
        <h2>{{ $product->name }}</h2>
        <p><strong>{{ $product->price }}€</strong></p>
        <img src="{{ $product->image }}" alt="product image" width="200px">
        <a href="{{ route('show.product', $product->id) }}">
            <button>Click here for details</button>
        </a>
@endforeach
