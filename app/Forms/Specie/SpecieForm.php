<?php

namespace App\Forms\Specie;

use App\Forms\Field;
use Kris\LaravelFormBuilder\Form;

class SpecieForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'label' => 'Nome',
                'rules' => 'required|string'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Salvar'
            ]);
    }
}
