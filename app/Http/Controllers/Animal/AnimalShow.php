<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Http\Resources\Animal as AnimalResource;
use Illuminate\Http\JsonResponse;

class AnimalShow extends Controller
{
    /**
     * @param Animal $animal
     * @return AnimalResource|JsonResponse
     */
    public function __invoke(Animal $animal)
    {
        return new AnimalResource($animal);
    }
}
