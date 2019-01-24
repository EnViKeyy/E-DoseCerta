<?php

namespace App\Http\Controllers\Specie;

use App\Http\Controllers\Controller;
use App\Models\Specie;

class SpecieShow extends Controller
{
    /**
     * @param Specie $specie
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Specie $specie)
    {
        return view('species.show', [
            'specie' => $specie
        ]);
    }
}
