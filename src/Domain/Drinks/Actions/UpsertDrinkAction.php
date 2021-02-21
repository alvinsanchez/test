<?php

namespace Domain\Drinks\Actions;

use Domain\Drinks\Models\Drink;
use Domain\Drinks\DTO\DrinksData;

class UpsertDrinkAction
{
    public function execute(DrinksData $drinksdata, $id = null): Drink
    {
        $drink = Drink::updateOrCreate([
            'id' => $id
        ],
        [
            'brand' => $drinksdata->brand,
            'name' => $drinksdata->name,
            'status' => 1,
            'active' => 1
        ]);

        return $drink->refresh();
    }
}
?>
