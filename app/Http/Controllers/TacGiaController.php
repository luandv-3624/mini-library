<?php

namespace App\Http\Controllers;

use App\Models\TacGia;
use Illuminate\Http\Request;

class TacGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $tacGia = TacGia::all();

    //     return response()->json([
    //         'status' => 'success',
    //         'data'=> $tacGia
    //     ], 200);
    // }

    public function index()
    {
        $tacGia = TacGia::withCount('sachs')->paginate(5);
        return view('author.author', compact('tacGia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'TenTG' => 'required|string|max:80',
            'QuocTich' => 'required|string|max:255',
        ]);

        $tacGia = TacGia::create($validated);

        return response()->json([
            'status' => 'success',
            'data' => $tacGia,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $tacGia = TacGia::find($id);

    //     if (!$tacGia) {
    //         return response()->json(['status' => 'error','message' => 'Tac gia khong ton tai!'], 404);
    //     }

    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $tacGia,
    //     ], 200);
    // }

    public function show($id)
    {
        $tacGia = TacGia::with('sachs')->findOrFail($id);
        return view('author.detail', compact('tacGia'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
