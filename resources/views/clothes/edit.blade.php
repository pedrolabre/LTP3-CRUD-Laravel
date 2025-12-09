@extends('layouts.app')

@section('title', 'Editar Roupa - Armário Virtual')

@section('content')
<div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
    <h1 class="mb-4">
        <i class="bi bi-pencil"></i> Editar Roupa
    </h1>
    
    <form action="{{ url('clothes/' . $cloth->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('clothes.partials.form-fields', ['cloth' => $cloth])

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('clothes.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
            <button type="submit" class="btn btn-warning">
                <i class="bi bi-save"></i> Atualizar Roupa
            </button>
        </div>
    </form>
</div>

@stack('scripts')
@endsection
