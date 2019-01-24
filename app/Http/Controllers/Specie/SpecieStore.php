<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalStore extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function __invoke(Request $request)
    {
        $animal = new Animal($request->all());

        try {
            $animal->save();

            return redirect()
                ->route('animals.index')
                ->with('alert-success', 'Animal cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do Animal!' . $e->getMessage());
        }
    }
}
