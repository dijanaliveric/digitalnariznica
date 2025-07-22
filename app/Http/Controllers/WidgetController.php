<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Widget;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    /**
     * Apply authentication middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the widgets.
     */
    public function index()
    {
        $widgets = Widget::orderBy('order')->get();
        return view('admin.widgets.index', compact('widgets'));
    }

    /**
     * Show the form for creating a new widget.
     */
    public function create()
    {
        return view('admin.widgets.create');
    }

    /**
     * Store a newly created widget in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'area'    => 'required|in:left,right',
            'title'   => 'required|string|max:100',
            'content' => 'required|string',
            'order'   => 'nullable|integer',
        ]);

        Widget::create([
            'area'    => $validated['area'],
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'order'   => $validated['order'] ?? 0,
        ]);

        return redirect()
            ->route('admin.widgets.index')
            ->with('success', 'Widget created successfully.');
    }

    /**
     * Show the form for editing the specified widget.
     */
    public function edit(Widget $widget)
    {
        return view('admin.widgets.edit', compact('widget'));
    }

    /**
     * Update the specified widget in storage.
     */
    public function update(Request $request, Widget $widget)
    {
        $validated = $request->validate([
            'area'    => 'required|in:left,right',
            'title'   => 'required|string|max:100',
            'content' => 'required|string',
            'order'   => 'nullable|integer',
        ]);

        $widget->update([
            'area'    => $validated['area'],
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'order'   => $validated['order'] ?? 0,
        ]);

        return redirect()
            ->route('admin.widgets.index')
            ->with('success', 'Widget updated successfully.');
    }

    /**
     * Remove the specified widget from storage.
     */
    public function destroy(Widget $widget)
    {
        $widget->delete();

        return redirect()
            ->route('admin.widgets.index')
            ->with('success', 'Widget deleted successfully.');
    }
}
