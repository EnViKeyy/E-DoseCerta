<?php

namespace App\Forms\Medicine;

use App\Forms\Field;
use Kris\LaravelFormBuilder\Form;

class MedicineForm extends Form
{

    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'label' => 'Nome',
                'rules' => 'required|string'
            ])
            ->add('concentration', Field::TEXT, [
                'label' => 'Concentração',
                'rules' => 'required|double'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Salvar'
            ]);
    }
}
