<?php

namespace Domain\Brands\Models;

use Domain\Brands\Collections\BrandsCollection;
use Domain\Drinks\MOdels\Drink;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable  = ['name', 'status', 'active'];

    public function newCollection(array $models = []) : BrandsCollection
    {
        return new BrandsCollection($models);
    }

    public function actives() {
        return $this->active == 1;
    }

//    public function drinks() {
//        return $this->hasMany(Drink::class);
//    }
}
?>
