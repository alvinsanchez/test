<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use Domain\Brands\Actions\UpsertBrandAction;
use Domain\Brands\Models\Brand;
use Illuminate\Http\Request;
use Domain\Brands\DTO\BrandData;

class BrandsController extends Controller
{
    public function upsertBrand(BrandRequest $request, UpsertBrandAction $action)
    {
        $exec = $action->execute(BrandData::fromRequest($request), $request->input('id'));
        if(optional($exec)->exists) {
            return response('Brand Save Successfully', 200);
        }
        return response('Something went wrong', 500);
    }

    public function getBrands() {
        $a = Brand::where('status', '=', 1)->get();
        $filteredByActive = $a
                            ->activeOnly()
                            ->map(function($item){
                               return collect($item)->except(['created_at', 'updated_at']);
                            });
        dd($filteredByActive->toArray());
    }
}
