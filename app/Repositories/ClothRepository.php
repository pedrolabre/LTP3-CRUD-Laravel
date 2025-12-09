<?php

namespace App\Repositories;

use App\Models\Cloth;
use Illuminate\Pagination\LengthAwarePaginator;

class ClothRepository
{
    /**
     * Retorna todas as roupas com paginação
     */
    public function getAllPaginated(int $perPage = 12): LengthAwarePaginator
    {
        return Cloth::latest()->paginate($perPage);
    }

    /**
     * Busca uma roupa por ID
     */
    public function findById(int $id): ?Cloth
    {
        return Cloth::find($id);
    }

    /**
     * Cria uma nova roupa
     */
    public function create(array $data): Cloth
    {
        // Converte strings vazias para null nos campos opcionais
        $data['store'] = !empty($data['store']) ? $data['store'] : null;
        $data['purchase_date'] = !empty($data['purchase_date']) ? $data['purchase_date'] : null;
        
        return Cloth::create($data);
    }

    /**
     * Atualiza uma roupa
     */
    public function update(Cloth $cloth, array $data): Cloth
    {
        // Converte strings vazias para null nos campos opcionais
        $data['store'] = !empty($data['store']) ? $data['store'] : null;
        $data['purchase_date'] = !empty($data['purchase_date']) ? $data['purchase_date'] : null;
        
        $cloth->update($data);
        return $cloth;
    }

    /**
     * Deleta uma roupa
     */
    public function delete(Cloth $cloth): bool
    {
        return $cloth->delete();
    }
}
