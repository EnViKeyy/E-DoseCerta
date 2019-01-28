<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Specie;
use Illuminate\Http\Request;

class AnimalIndex extends Controller
{
    private $itemsPerPage = 10;

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $perPage = $request->query->get('perPage', $this->itemsPerPage);

        $animals = Animal::paginate($perPage);

        foreach ($animals as $animal) {
            $animal->specie = Specie::findOrFail($animal->specie);
        }

        return view('animals.index', [
            'animals' => $animals
        ]);
    }
}
