<?php

namespace App\Http\Resources\Subcategory;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SubcategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' =>$this->name,
            'category_id' =>$this->category_id,
            'description' =>$this->description,

            'href' => [
                'link' => route('subcategory.show',$this->id)
            ]
        ];
    }
}
