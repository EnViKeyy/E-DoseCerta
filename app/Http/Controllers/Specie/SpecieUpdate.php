<?php

namespace App\Http\Controllers\Specie;

use App\Http\Controllers\Controller;
use App\Models\Specie;
use Illuminate\Http\Request;

class SpecieUpdate extends Controller
{
    /**
     * @param Request $request
     * @param Specie $specie
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Specie $specie)
    {
        $specie->update($request->all());

        try {
            $specie->save();

            return redirect()
                ->route('species.index')
                ->with('alert-success', 'Dados da espécie atualizados com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização dos dados da espécie!');
        }
    }
}
