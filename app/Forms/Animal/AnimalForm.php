<?php

namespace App\Forms\Animal;

use App\Forms\Field;
use App\Models\Specie;
use Kris\LaravelFormBuilder\Form;

class AnimalForm extends Form
{
    /**
     * method to change specie that is an integer to object specie
     *
     * @return array
     */
    private function getSpecies(){
        $species = Specie::all();
        $speciesOptions = [];
        foreach($species as $specie){
            $speciesOptions[$specie->id.""] = $specie->name;
        }
        return $speciesOptions;
    }

    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'label' => 'Nome',
                'rules' => 'required|string'
            ])
            ->add('specie', Field::SELECT, [
                'label' => 'Espécie',
                'rules' => 'required|string',
                'empty_value' => 'Selecione uma espécie',
                'choices' => $this->getSpecies()
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
