<?php

namespace App\Http\Controllers\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;

class MedicineShow extends Controller
{
    /**
     * @param Medicine $medicine
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Medicine $medicine)
    {
        return view('medicines.show', [
            'medicine' => $medicine
        ]);
    }
}
