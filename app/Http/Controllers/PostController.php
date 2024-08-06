<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\support\Facades\Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Product::all();
        return view('posts.index', compact('posts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price'=> 'required|numeric|min:0',
            'weight'=> 'required|numeric|min:0',
            'shine'=> 'required|string|max:255',
            'image'=> 'required|url',
            'quantity'=> 'required|integer|min:0',
            'inStock'=> 'required|integer|min:0',
            'categoryId'=> 'required|integer|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('posts.create')
                ->withErrors($validator)
                ->withInput();
        }

        Product::create($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Product::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price'=> 'required|numeric|min:0',
            'weight'=> 'required|numeric|min:0',
            'shine'=> 'required|string|max:255',
            'image'=> 'required|url',
            'quantity'=> 'required|integer|min:0',
            'inStock'=> 'required|integer|min:0',
            'categoryId'=> 'required|integer|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('posts.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }
$validated = $validator->validated();
        $post->update($validated);
        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Product::find($id);
        $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
    // routes functions
    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Product::find($id);
        return view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Product::find($id);
        return view('posts.edit', compact('post'));
    }
}
