<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Http\Resources\Animal as AnimalResource;

class AnimalList extends Controller
{
    private $itemsPerPage = 10;

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        $users = Animal::paginate($this->itemsPerPage);

        return AnimalResource::collection($users);
    }
}
