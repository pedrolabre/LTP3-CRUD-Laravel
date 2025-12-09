<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Upload de imagem
     */
    public function upload(UploadedFile $file, string $directory = 'clothes'): string
    {
        return $file->store($directory, 'public');
    }

    /**
     * Remove imagem do storage
     */
    public function delete(string $path): bool
    {
        return Storage::disk('public')->delete($path);
    }

    /**
     * Atualiza imagem (deleta antiga e faz upload da nova)
     */
    public function update(?string $oldPath, UploadedFile $newFile, string $directory = 'clothes'): string
    {
        if ($oldPath) {
            $this->delete($oldPath);
        }
        
        return $this->upload($newFile, $directory);
    }
}
