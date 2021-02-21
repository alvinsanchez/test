<?php

namespace Domain\Drinks\Models;

use Domain\Brands\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Domain\Drinks\Collections\DrinksCollection;

class Drink extends Model
{
    protected $fillable = ['brand_id', 'name', 'status', 'active'];

    public function newCollection(array $models = []): DrinksCollection
    {
        return new DrinksCollection($models);
    }

    public function brands() {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

}
