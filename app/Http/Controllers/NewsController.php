<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    /*
    public function index()
    {
        $news = News::orderBy('published_at', 'desc')->paginate(10);
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }


*/
    public function index()
{
    // eager load images, uz nju sezone i paginaciju
    $news = News::with('images')
                ->orderBy('published_at', 'desc')
                ->paginate(10);

    return view('news.index', compact('news'));
}


    public function store(Request $request)
    {
        // Validiramo osnovna polja i niz fajlova images[]
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'published_at' => 'nullable|date',
            'images'       => 'nullable|array',
            'images.*'     => 'image|max:2048',
            'captions'     => 'nullable|array',
            'captions.*'   => 'nullable|string|max:255',
        ]);

        // Kreiramo vijest bez slika
        $news = News::create([
            'title'        => $data['title'],
            'content'      => $data['content'],
            'published_at' => $data['published_at'] ?? now(),
        ]);

        // Ako imamo uploadane slike
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $idx => $file) {
                // Spremi fajl i uzmi relativnu putanju
                $path = $file->store('news', 'public');

                // Kreiraj vezanu sliku
                $news->images()->create([
                    'path'    => $path,
                    'caption' => $data['captions'][$idx] ?? null,
                    'order'   => $idx,
                ]);
            }
        }

        return redirect()->route('news.index')
                         ->with('success', 'Vijest je uspješno kreirana.');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'published_at' => 'nullable|date',
            'images'       => 'nullable|array',
            'images.*'     => 'image|max:2048',
            'captions'     => 'nullable|array',
            'captions.*'   => 'nullable|string|max:255',
            'delete_images'=> 'nullable|array',
            'delete_images.*' => 'integer',
        ]);

        // Ažuriramo osnovna polja vijesti
        $news->update([
            'title'        => $data['title'],
            'content'      => $data['content'],
            'published_at' => $data['published_at'] ?? $news->published_at,
        ]);

        // Brišemo označene stare slike
        if (!empty($data['delete_images'])) {
            foreach ($data['delete_images'] as $imageId) {
                $img = $news->images()->find($imageId);
                if ($img) {
                    Storage::disk('public')->delete($img->path);
                    $img->delete();
                }
            }
        }

        // Dodajemo nove uploadane slike
        if ($request->hasFile('images')) {
            // Početni index = broj već postojećih slika
            $start = $news->images()->count();
            foreach ($request->file('images') as $idx => $file) {
                $path = $file->store('news', 'public');
                $news->images()->create([
                    'path'    => $path,
                    'caption' => $data['captions'][$idx] ?? null,
                    'order'   => $start + $idx,
                ]);
            }
        }

        return redirect()->route('news.index')
                         ->with('success', 'Vijest je uspješno ažurirana.');
    }

    public function destroy(News $news)
    {
        // Pobrišemo sve fajlove slika
        foreach ($news->images as $img) {
            Storage::disk('public')->delete($img->path);
        }
        // Brisanje vijesti automatski briše morphMany slike zbog onDelete('cascade')
        $news->delete();

        return back()->with('success', 'Vijest je obrisana.');
    }
}
