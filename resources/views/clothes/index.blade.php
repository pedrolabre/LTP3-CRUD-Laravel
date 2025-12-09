@extends('layouts.app')

@section('title', 'Minhas Roupas - Armário Virtual')

@section('content')
<div style="max-width: 1400px; margin: 0 auto; padding: 0 20px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">
            <i class="bi bi-hanger"></i> Meu Armário
        </h1>
        <a href="{{ route('clothes.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nova Roupa
        </a>
    </div>

    @if($clothes->count() > 0)
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
            @foreach($clothes as $cloth)
                <div class="col">
                    <x-cloth-card :cloth="$cloth" />
                </div>
            @endforeach
        </div>

        <!-- Paginação -->
        <div class="mt-4 d-flex justify-content-center">
            {{ $clothes->links() }}
        </div>
    @else
        <x-alert type="info">
            Nenhuma roupa cadastrada ainda. 
            <a href="{{ route('clothes.create') }}" class="alert-link">Clique aqui</a> 
            para adicionar sua primeira roupa!
        </x-alert>
    @endif
</div>
@endsection