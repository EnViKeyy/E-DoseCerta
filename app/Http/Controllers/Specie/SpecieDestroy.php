<?php

namespace App\Http\Controllers\Specie;

use App\Http\Controllers\Controller;
use App\Models\Specie;
use App\Http\Resources\Specie as SpecieResource;

class SpecieDestroy extends Controller
{
    /**
     * @param Specie $specie
     * @return SpecieResource
     * @throws \Exception
     */
    public function __invoke(Specie $specie)
    {
        $specie->delete();

        return new SpecieResource($specie);
    }
}
