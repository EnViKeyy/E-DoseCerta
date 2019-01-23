<?php

namespace App\Http\Controllers\Animal;

use App\Forms\Animal\AnimalForm;
use App\Http\Controllers\Controller;
use App\Models\Animal;

class AnimalEdit extends Controller
{
    /**
     * @param Animal $animal
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Animal $animal)
    {
        $form = $this->formBuilder->create(AnimalForm::class, [
            'url' => route('animals.update', $animal->id),
            'method' => 'PUT',
            'model' => $animal
        ]);

        return view('animals.edit', [
            'form' => $form
        ]);
    }
}
