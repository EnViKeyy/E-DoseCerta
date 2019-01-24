<?php

namespace App\Http\Controllers\Specie;

use App\Forms\Specie\SpecieForm;
use App\Http\Controllers\Controller;

class SpecieCreate extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $form = $this->formBuilder->create(SpecieForm::class, [
            'url' => route('species.store'),
            'method' => 'POST'
        ]);

        return view('species.create', [
            'form' => $form
        ]);
    }
}
