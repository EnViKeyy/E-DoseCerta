<?php

namespace App\Forms\Animal;

use App\Forms\Field;
use Kris\LaravelFormBuilder\Form;

class AnimalForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'label' => 'Nome',
                'rules' => 'required|string'
            ])
            ->add('rg', Field::TEXT, [
                'label' => 'Rg',
                'rules' => 'required|unique:animals'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Salvar'
            ]);
    }
}
