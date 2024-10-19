<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultures = Culture::all(); // Ambil semua data culture

        // Pisahkan data ke dalam dua array
        $section1 = $cultures->filter(function ($item, $key) {
            return $key % 2 == 0; // Data dengan indeks genap
        })->values(); // Reset indeks

        $section2 = $cultures->filter(function ($item, $key) {
            return $key % 2 != 0; // Data dengan indeks ganjil
        })->values(); // Reset indeks

        return view('budaya.index', compact('section1', 'section2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Culture $culture, $id)
    {
        $culture = Culture::findOrFail($id);
        return view('budaya.detail', compact('culture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Culture $culture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Culture $culture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Culture $culture)
    {
        //
    }
}
