<?php

namespace App\Http\Controllers\Specie;

use App\Http\Controllers\Controller;
use App\Models\Specie;
use Illuminate\Http\Request;

class SpecieStore extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function __invoke(Request $request)
    {
        $specie = new Specie($request->all());

        try {
            $specie->save();

            return redirect()
                ->route('species.index')
                ->with('alert-success', 'Espécie cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro da espécie!' . $e->getMessage());
        }
    }
}
