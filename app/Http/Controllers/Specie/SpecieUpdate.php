<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalUpdate extends Controller
{
    /**
     * @param Request $request
     * @param Animal $animal
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Animal $animal)
    {
        $animal->update($request->all());

        try {
            $animal->save();

            return redirect()
                ->route('animals.index')
                ->with('alert-success', 'Dados do animal atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização dos dados do Animal!');
        }
    }
}
