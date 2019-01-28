<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Http\Resources\Animal as AnimalResource;

class AnimalDestroy extends Controller
{
    /**
     * @param Animal $animal
     * @return AnimalResource
     * @throws \Exception
     */
    public function __invoke(Animal $animal)
    {
        $animal->delete();

        return new AnimalResource($animal);
    }
}
