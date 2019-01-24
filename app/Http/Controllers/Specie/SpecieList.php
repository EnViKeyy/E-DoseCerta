<?php

namespace App\Http\Controllers\Specie;

use App\Http\Controllers\Controller;
use App\Models\Specie;
use App\Http\Resources\Specie as SpecieResource;

class SpecieList extends Controller
{
    private $itemsPerPage = 10;

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        $species = Specie::paginate($this->itemsPerPage);

        return SpecieResource::collection($species);
    }
}
