<?php

namespace App\Http\Controllers\Animal;

use App\Forms\Animal\AnimalForm;
use App\Http\Controllers\Controller;

class AnimalCreate extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $form = $this->formBuilder->create(AnimalForm::class, [
            'url' => route('animals.store'),
            'method' => 'POST'
        ]);

        return view('animals.create', [
            'form' => $form
        ]);
    }
}
