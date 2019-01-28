<?php

namespace App\Http\Controllers\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineStore extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $medicine = new Medicine($request->all());

        try {
            $medicine->save();

            return redirect()
                ->route('medicines.index')
                ->with('alert-success', 'Fármaco cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do fármaco!' . $e->getMessage());
        }
    }
}
