<?php

namespace App\Http\Controllers\Medicine;

use App\Forms\Medicine\MedicineForm;
use App\Http\Controllers\Controller;
use App\Models\Medicine;

class MedicineEdit extends Controller
{
    /**
     * @param Medicine $medicine
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Medicine $medicine)
    {
        $form = $this->formBuilder->create(MedicineForm::class, [
            'url' => route('medicines.update', $medicine->id),
            'method' => 'PUT',
            'model' => $medicine
        ]);

        return view('medicines.edit', [
            'form' => $form
        ]);
    }
}
