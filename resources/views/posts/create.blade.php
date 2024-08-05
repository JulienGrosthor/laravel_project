@include('header')

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add a product</h3>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Product description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" class="form-control" id="weight" name="weight" required>
                </div>
                <div class="form-group">
                    <label for="shine">Product shine</label>
                    <input type="text" class="form-control" id="shine" name="shine" required>
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Product quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="inStock">Product stock</label>
                    <input type="text" class="form-control" id="inStock" name="inStock" required>
                </div>
                <div class="form-group">
                    <label for="categoryId">Product category ID</label>
                    <input type="text" class="form-control" id="categoryId" name="categoryId" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
