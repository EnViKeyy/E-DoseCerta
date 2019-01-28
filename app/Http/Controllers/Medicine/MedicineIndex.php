<?php

namespace App\Http\Controllers\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineIndex extends Controller
{
    private $itemsPerPage = 10;

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $perPage = $request->query->get('perPage', $this->itemsPerPage);

        $medicines = Medicine::paginate($perPage);

        return view('medicines.index', [
            'medicines' => $medicines
        ]);
    }
}
