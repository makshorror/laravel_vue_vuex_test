<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Models\People;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, People $person)
    {
        $data = $request->validated();
        $person->update($data);
        return response([]);
    }
}
