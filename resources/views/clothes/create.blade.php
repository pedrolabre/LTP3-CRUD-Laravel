@extends('layouts.app')

@section('title', 'Nova Roupa - Armário Virtual')

@section('content')
<div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
    <h1 class="mb-4">
        <i class="bi bi-plus-circle"></i> Cadastrar Nova Roupa
    </h1>
    
    <form action="{{ route('clothes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('clothes.partials.form-fields', ['cloth' => null])

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('clothes.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Salvar Roupa
            </button>
        </div>
    </form>
</div>

@stack('scripts')
@endsection
