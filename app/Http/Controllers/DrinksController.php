<?php

namespace App\Http\Controllers;

use App\Http\Requests\DrinksRequest;
use Domain\Drinks\DTO\DrinksData;
use Domain\Drinks\Models\Drink;
use Illuminate\Http\Request;
use Domain\Drinks\Actions\UpsertDrinkAction;

class DrinksController extends Controller
{
    public function addDrinks(DrinksRequest $request, UpsertDrinkAction $action) {
        $a = $action->execute(DrinksData::fromRequest($request), $request->input('id'));
        if(optional($a)->exists) {
            return response('Save successfully', 200);
        }
    }

    public function getAll() {
        $a = Drink::with('brands')->get();
        dd($a->toArray());
    }
}
