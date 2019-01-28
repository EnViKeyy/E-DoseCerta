<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Specie;

class AnimalShow extends Controller
{
    /**
     * @param Animal $animal
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Animal $animal)
    {
        $animal->specie = Specie::findOrFail($animal->specie);

        return view('animals.show', [
            'animal' => $animal
        ]);
    }
}
