<?php

namespace App\Http\Controllers\Specie;

use App\Http\Controllers\Controller;
use App\Models\Specie;
use Illuminate\Http\Request;

class SpecieIndex extends Controller
{
    private $itemsPerPage = 10;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $perPage = $request->query->get('perPage', $this->itemsPerPage);

        $species = Specie::paginate($perPage);

        return view('species.index', [
            'species' => $species
        ]);
    }
}