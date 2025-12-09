<?php

namespace App\Services;

use App\Models\Cloth;
use App\Repositories\ClothRepository;
use Illuminate\Http\UploadedFile;

class ClothService
{
    public function __construct(
        private ClothRepository $repository,
        private ImageService $imageService
    ) {}

    /**
     * Lista todas as roupas com paginação
     */
    public function getAllPaginated(int $perPage = 12)
    {
        return $this->repository->getAllPaginated($perPage);
    }

    /**
     * Busca uma roupa por ID
     */
    public function findById(int $id): ?Cloth
    {
        return $this->repository->findById($id);
    }

    /**
     * Cria uma nova roupa
     */
    public function create(array $data): Cloth
    {
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $data['image'] = $this->imageService->upload($data['image']);
        }

        return $this->repository->create($data);
    }

    /**
     * Atualiza uma roupa existente
     */
    public function update(Cloth $cloth, array $data): Cloth
    {
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $data['image'] = $this->imageService->update($cloth->image, $data['image']);
        }

        return $this->repository->update($cloth, $data);
    }

    /**
     * Deleta uma roupa
     */
    public function delete(Cloth $cloth): bool
    {
        if ($cloth->image) {
            $this->imageService->delete($cloth->image);
        }

        return $this->repository->delete($cloth);
    }
}
