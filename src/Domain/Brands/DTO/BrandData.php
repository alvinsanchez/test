<?php

namespace Domain\Brands\DTO;

use App\Http\Requests\BrandRequest;
use Spatie\DataTransferObject\DataTransferObject;

class BrandData extends DataTransferObject
{
    public string $name;

    public static function fromRequest(BrandRequest $request): BrandData
    {
        return new self([
            'name' => $request->input('name')
        ]);
    }
}
?>
