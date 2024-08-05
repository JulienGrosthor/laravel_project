<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Post</h3>
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id"
                           value="{{ $post->id }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="{{ $post->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <input type="text" class="form-control" id="title" name="title"
                           value="{{ $post->description }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                           value="{{ $post->price }}" required>
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" class="form-control" id="weight" name="weight"
                           value="{{ $post->weight }}" required>
                </div>
                <div class="form-group">
                    <label for="shine">Product Shine</label>
                    <input type="text" class="form-control" id="shine" name="shine"
                           value="{{ $post->shine }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image"
                           value="{{ $post->image }}" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Product quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"
                           value="{{ $post->quantity }}" required>
                </div>
                <div class="form-group">
                    <label for="inStock">Product stock</label>
                    <input type="text" class="form-control" id="inStock" name="inStock"
                           value="{{ $post->inStock }}" required>
                </div>
                <div class="form-group">
                    <label for="categoryId">Product category ID</label>
                    <input type="text" class="form-control" id="categoryId" name="categoryId"
                           value="{{ $post->categoryId }}" required>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>
