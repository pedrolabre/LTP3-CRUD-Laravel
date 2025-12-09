@props(['cloth'])

<div class="card h-100">
    <!-- Badge de Status -->
    <x-status-badge :status="$cloth->status" class="status-badge" />
    
    <!-- Imagem da Roupa -->
    @if($cloth->image)
        <img src="{{ asset('storage/' . $cloth->image) }}" 
             alt="{{ $cloth->name }}" 
             class="cloth-image">
    @else
        <div class="bg-secondary d-flex align-items-center justify-content-center" 
             style="height: 250px;">
            <i class="bi bi-image text-white" style="font-size: 4rem;"></i>
        </div>
    @endif
    
    <!-- Conteúdo do Card -->
    <div class="card-body">
        <h5 class="card-title">{{ $cloth->name }}</h5>
        
        <p class="card-text">
            <i class="bi bi-tag"></i> <strong>Categoria:</strong> {{ $cloth->category }}
        </p>
        
        <p class="card-text">
            <i class="bi bi-palette"></i> <strong>Cor:</strong> {{ $cloth->color }}
        </p>
        
        <p class="card-text">
            <i class="bi bi-rulers"></i> <strong>Tamanho:</strong> {{ $cloth->size }}
        </p>
        
        <p class="card-text text-success fw-bold">
            <i class="bi bi-currency-dollar"></i> R$ {{ number_format($cloth->price, 2, ',', '.') }}
        </p>
    </div>
    
    <!-- Ações do Card -->
    <div class="card-footer">
        <div class="btn-group w-100">
            <a href="{{ route('clothes.show', $cloth->id) }}" 
               class="btn btn-sm btn-outline-primary">
                <i class="bi bi-eye"></i> Ver
            </a>
            <a href="{{ route('clothes.edit', $cloth->id) }}" 
               class="btn btn-sm btn-outline-warning">
                <i class="bi bi-pencil"></i> Editar
            </a>
            <form action="{{ route('clothes.destroy', $cloth->id) }}" 
                  method="POST" 
                  onsubmit="return confirm('Tem certeza que deseja excluir esta roupa?');"
                  class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i> Excluir
                </button>
            </form>
        </div>
    </div>
</div>
