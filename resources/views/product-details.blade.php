@include('header')

<h1>Product information >>>{{$product->name}}<<<</h1>
<p><strong>Description:</strong> {{$product->description}}</p>
<p><strong>Price:</strong> {{$product->price}} €</p>
<p><strong>Weight:</strong> {{$product->weight}} grams</p>
<img src="{{$product->image}}" alt="product image" width="500px">

