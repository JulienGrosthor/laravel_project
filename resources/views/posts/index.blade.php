@include('header')
<br>
<h1>Back office product list</h1>

<div class="container mt-5">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <img src="{{$post->image}}" width="200px">
                            <p><strong>{{$post->name}}</strong></p>
                            <div class="col-sm">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                   class="btn btn-primary btn-sm">Edit</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</>
</html>
