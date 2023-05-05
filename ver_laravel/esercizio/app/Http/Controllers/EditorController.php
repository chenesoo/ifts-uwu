<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editors = Editor::all();

        return response()->json([
            'success' => true,
            'data' => $editors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $editor = Editor::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $editor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Editor $editor)
    {
        return response()->json([
            'success' => true,
            'data' => $editor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editor $editor)
    {
        $editor->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $editor
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editor $editor)
    {
        $editor->delete();

        return response()->json([
            'success' => true
        ], 204);
    }
}
