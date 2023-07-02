<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Models\People;

class IndexController extends Controller
{
    public function __invoke()
    {
        $person = People::all();
        return PersonResource::collection($person);
    }
}
