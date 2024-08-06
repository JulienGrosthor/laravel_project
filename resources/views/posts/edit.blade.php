<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Product</h3>
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')

                    <input type="hidden" name="id"
                           value="{{ $post->id }}">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                           value="{{ $post->name }}" required>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                           value="{{ $post->description }}" required>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                           value="{{ $post->price }}" required>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight"
                           value="{{ $post->weight }}" required>
                    @error('weight')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shine">Product Shine</label>
                    <input type="text" class="form-control @error('shine') is-invalid @enderror" id="shine" name="shine"
                           value="{{ $post->shine }}" required>
                    @error('shine')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                           value="{{ $post->image }}" required>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Product quantity</label>
                    <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity"
                           value="{{ $post->quantity }}" required>
                    @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inStock">Product stock</label>
                    <input type="text" class="form-control @error('inStock') is-invalid @enderror" id="inStock" name="inStock"
                           value="{{ $post->inStock }}" required>
                    @error('inStock')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categoryId">Product category ID</label>
                    <input type="text" class="form-control @error('categoryId') is-invalid @enderror" id="categoryId" name="categoryId"
                           value="{{ $post->categoryId }}" required>
                    @error('categoryId')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>
