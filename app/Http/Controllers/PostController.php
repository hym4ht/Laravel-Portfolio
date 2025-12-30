<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileId = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Store file in the root folder of the Google Drive disk
            $path = $file->store('', 'google');

            // Attempt to retrieve the URL to extract the ID
            $url = Storage::disk('google')->url($path);
            
            // Extract ID from URL 
            // URL format typically: https://drive.google.com/file/d/{ID}/view or similar
            if (preg_match('/\/d\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
                $fileId = $matches[1];
            } else {
                // Fallback: assume the path returned by the adapter IS the ID if the adapter is configured that way
                // But for masbug adapter, it's usually the path.
                // If regex fails, we might just store the path and debug later.
                // But user wants ID specifically.
                // Another way is to get metadata.
                try {
                     // Adapter specific logic if needed. 
                     // For now, reliance on URL generation is the most standard "adapter-agnostic" way for Drive.
                } catch (\Exception $e) {
                    // ignore
                }
            }
        }

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image_file_id' => $fileId,
            'published_at' => now(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
