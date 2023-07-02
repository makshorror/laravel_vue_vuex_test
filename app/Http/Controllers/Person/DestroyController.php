<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\People;

class DestroyController extends Controller
{
    public function __invoke(People $person)
    {
        $person->delete();
        return response([]);
    }
}
