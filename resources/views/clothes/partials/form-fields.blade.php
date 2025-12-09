@php
    $statusOptions = [
        'novo' => 'Novo',
        'usado' => 'Usado',
        'desgastado' => 'Desgastado',
        'reparo' => 'Em Reparo',
        'doado' => 'Doado'
    ];
@endphp

<div class="row">
    <div class="col-md-6">
        <x-form-input 
            label="Nome da Roupa" 
            name="name" 
            :value="$cloth->name ?? ''"
            required />
    </div>

    <div class="col-md-6">
        <x-form-input 
            label="Categoria" 
            name="category" 
            :value="$cloth->category ?? ''"
            placeholder="Ex: Camisa, Calça, Vestido..."
            required />
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <x-form-input 
            label="Cor" 
            name="color" 
            :value="$cloth->color ?? ''"
            required />
    </div>

    <div class="col-md-4">
        <x-form-input 
            label="Tamanho" 
            name="size" 
            :value="$cloth->size ?? ''"
            placeholder="Ex: P, M, G, 42..."
            required />
    </div>

    <div class="col-md-4">
        <x-form-input 
            label="Material" 
            name="material" 
            :value="$cloth->material ?? ''"
            placeholder="Ex: Algodão, Jeans..."
            required />
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <x-form-input 
            label="Preço (R$)" 
            name="price" 
            type="number"
            :value="$cloth->price ?? ''"
            step="0.01"
            min="0"
            required />
    </div>

    <div class="col-md-4">
        <x-form-input 
            label="Loja" 
            name="store" 
            :value="$cloth->store ?? ''" />
    </div>

    <div class="col-md-4">
        <x-form-input 
            label="Data de Compra" 
            name="purchase_date" 
            type="date"
            :value="isset($cloth->purchase_date) ? $cloth->purchase_date->format('Y-m-d') : ''" />
    </div>
</div>

<x-form-select 
    label="Status" 
    name="status" 
    :options="$statusOptions"
    :value="$cloth->status ?? ''"
    required />

<x-form-image 
    :currentImage="$cloth->image ?? null" />
