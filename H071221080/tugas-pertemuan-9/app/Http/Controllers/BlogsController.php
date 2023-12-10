<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::orderBy('updated_at', 'desc')->get();
        $categories = Blogs::distinct()->get('category');
        return view('index', compact('blogs', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Blogs::distinct()->get('category');
        return view('create-blog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'author' => $request->author,
            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
        ];

        Blogs::create($data);
        return redirect()->to('blogs')->with('success', 'Berhasil membuat blog baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Blogs::distinct()->get('category');

        foreach ($categories as $item) {
            if ($id === $item->category) {
                $blogs = Blogs::where('category', $id)->orderBy('updated_at', 'desc')->get();
                return view('index', compact('blogs', 'categories'));
            }
        }

        $blogDetails = Blogs::all()->where('id', $id);
        return view('blog-details', compact('blogDetails', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogDetails = Blogs::all()->where('id', $id);
        $categories = Blogs::distinct()->get('category');
        return view('manage-blog', compact('blogDetails', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'author' => $request->author,
            'category' => $request->category,
        ];

        Blogs::where('id', $id)->update($data);
        return redirect()->to('blogs')->with('success', 'Blog berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blogs::where('id', $id)->delete();
        return redirect()->to('blogs')->with('success', 'Blog berhasil dihapus');
    }
}
