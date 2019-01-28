<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Http\Resources\Animal as AnimalResource;
use App\Models\Specie;
use Illuminate\Http\JsonResponse;

class AnimalShow extends Controller
{
    /**
     * @param Animal $animal
     * @return AnimalResource|JsonResponse
     */
    public function __invoke(Animal $animal)
    {
        $animal->specie = Specie::findOrFail($animal->specie);

        return view('animals.show', [
            'animal' => $animal
        ]);
    }
}
