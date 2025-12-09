<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Services\ClothService;
use App\Http\Requests\StoreClothRequest;
use App\Http\Requests\UpdateClothRequest;

class ClothController extends Controller
{
    public function __construct(
        private ClothService $service
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clothes = $this->service->getAllPaginated(12);
        return view('clothes.index', compact('clothes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clothes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClothRequest $request)
    {
        $this->service->create($request->validated());

        return redirect()->route('clothes.index')
            ->with('success', 'Roupa cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cloth $cloth)
    {
        return view('clothes.show', compact('cloth'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cloth $cloth)
    {
        return view('clothes.edit', compact('cloth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClothRequest $request, Cloth $cloth)
    {
        $this->service->update($cloth, $request->validated());

        return redirect()->route('clothes.index')
            ->with('success', 'Roupa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cloth $cloth)
    {
        $this->service->delete($cloth);

        return redirect()->route('clothes.index')
            ->with('success', 'Roupa excluída com sucesso!');
    }
}