@extends('layouts.app')

@section('title', $cloth->name . ' - Armário Virtual')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="bi bi-eye"></i> Detalhes da Roupa</h4>
                <x-status-badge :status="$cloth->status" />
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Imagem -->
                    <div class="col-md-5 mb-3">
                        @if($cloth->image)
                            <img src="{{ asset('storage/' . $cloth->image) }}" 
                                 alt="{{ $cloth->name }}" 
                                 class="img-fluid rounded shadow">
                        @else
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-center" 
                                 style="height: 400px;">
                                <i class="bi bi-image text-white" style="font-size: 6rem;"></i>
                            </div>
                        @endif
                    </div>

                    <!-- Informações -->
                    <div class="col-md-7">
                        <h2 class="mb-4">{{ $cloth->name }}</h2>

                        <div class="cloth-details">
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-tag"></i> Categoria</span>
                                <span class="detail-value">{{ $cloth->category }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-palette"></i> Cor</span>
                                <span class="detail-value">{{ $cloth->color }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-rulers"></i> Tamanho</span>
                                <span class="detail-value">{{ $cloth->size }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-droplet"></i> Material</span>
                                <span class="detail-value">{{ $cloth->material }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-currency-dollar"></i> Preço</span>
                                <span class="detail-value text-success fw-bold">R$ {{ number_format($cloth->price, 2, ',', '.') }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-shop"></i> Loja</span>
                                <span class="detail-value">{{ $cloth->store }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-calendar-event"></i> Data de Compra</span>
                                <span class="detail-value">{{ $cloth->purchase_date->format('d/m/Y') }}</span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-info-circle"></i> Status</span>
                                <span class="detail-value"><x-status-badge :status="$cloth->status" /></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-clock"></i> Cadastrado em</span>
                                <span class="detail-value">{{ $cloth->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                            
                            @if($cloth->updated_at != $cloth->created_at)
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-pencil-square"></i> Última atualização</span>
                                <span class="detail-value">{{ $cloth->updated_at->format('d/m/Y H:i') }}</span>
                            </div>
                            @endif
                        </div>

                        <!-- Ações -->
                        <div class="d-flex gap-2 mt-4">
                            <a href="{{ route('clothes.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </a>
                            <a href="{{ route('clothes.edit', $cloth->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <form action="{{ route('clothes.destroy', $cloth->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta roupa?');"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection