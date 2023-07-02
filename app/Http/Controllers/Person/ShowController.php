<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Models\People;

class ShowController extends Controller
{
    public function __invoke(People $person)
    {
        return new PersonResource($person);
    }
}
