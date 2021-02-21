<?php

namespace Domain\Brands\Actions;

use Domain\Brands\DTO\BrandData;
use Domain\Brands\Models\Brand;

class UpsertBrandAction
{
    public function execute(BrandData $brand, $id = null) : Brand
    {
        $upsert = Brand::updateOrCreate([
            'id' => $id
        ],[
            'name' => $brand->name,
            'status' => 1,
            'active' => 1,
        ]);

        return $upsert->refresh();
    }
}
?>
