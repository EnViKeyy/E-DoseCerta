<?php

namespace App\Http\Controllers\Specie;

use App\Forms\Specie\SpecieForm;
use App\Http\Controllers\Controller;
use App\Models\Specie;

class SpecieEdit extends Controller
{
    /**
     * @param Specie $specie
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Specie $specie)
    {
        $form = $this->formBuilder->create(SpecieForm::class, [
            'url' => route('species.update', $specie->id),
            'method' => 'PUT',
            'model' => $specie
        ]);

        return view('species.edit', [
            'form' => $form
        ]);
    }
}
