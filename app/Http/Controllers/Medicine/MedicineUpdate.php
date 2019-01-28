<?php

namespace App\Http\Controllers\Medicine;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineUpdate extends Controller
{
    /**
     * @param Request $request
     * @param Medicine $medicine
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Medicine $medicine)
    {
        $medicine->update($request->all());

        try {
            $medicine->save();

            return redirect()
                ->route('medicines.index')
                ->with('alert-success', 'Dados do fármaco atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização dos dados do fármaco!');
        }
    }
}
