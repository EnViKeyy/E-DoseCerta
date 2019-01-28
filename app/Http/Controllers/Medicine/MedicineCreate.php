<?php

namespace App\Http\Controllers\Medicine;

use App\Forms\Medicine\MedicineForm;
use App\Http\Controllers\Controller;

class MedicineCreate extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $form = $this->formBuilder->create(MedicineForm::class, [
            'url' => route('medicines.store'),
            'method' => 'POST'
        ]);

        return view('medicines.create', [
            'form' => $form
        ]);
    }
}
