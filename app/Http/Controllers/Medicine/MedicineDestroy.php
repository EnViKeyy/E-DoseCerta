<?php

namespace App\Http\Controllers\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Http\Resources\Medicine as MedicineResource;

class MedicineDestroy extends Controller
{
    /**
     * @param Medicine $medicine
     * @return MedicineResource
     * @throws \Exception
     */
    public function __invoke(Medicine $medicine)
    {
        $medicine->delete();

        return new MedicineResource($medicine);
    }
}
