<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function index()
    {
        $advices = Advice::paginate(10);
        return view('advices.index', compact('advices'));
    }

    public function create()
    {
        return view('advices.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('advices', 'public');
        }

        Advice::create($data);

        return redirect()->route('advices.index');
    }

    public function show(Advice $advice)
    {
        return view('advices.show', compact('advice'));
    }

    public function edit(Advice $advice)
    {
        return view('advices.edit', compact('advice'));
    }

    public function update(Request $request, Advice $advice)
    {
        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('advices', 'public');
        }

        $advice->update($data);

        return redirect()->route('advices.index');
    }

    public function destroy(Advice $advice)
    {
        $advice->delete();
        return back();
    }
}
