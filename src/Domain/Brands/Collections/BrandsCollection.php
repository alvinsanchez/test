<?php

namespace Domain\Brands\Collections;

use Domain\Brands\Models\Brand;
use Illuminate\Support\Collection;

class BrandsCollection extends Collection
{
    public function activeOnly(array $models = []): self
    {
        return $this->filter(fn (Brand $brand) =>
            $brand->actives()
        );
    }
}
?>
