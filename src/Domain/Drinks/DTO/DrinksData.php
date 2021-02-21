<?php

namespace Domain\Drinks\DTO;

use App\Http\Requests\DrinksRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DrinksData extends DataTransferObject
{
    public string $brand;

    public string $name;

    public static function fromRequest(DrinksRequest $request) : DrinksData {
        return new self([
           'brand' => $request->input('brand'),
            'name' => $request->input('name')
        ]);
    }
}

?>
