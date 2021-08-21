<?php

namespace App\Http\Resources\Issue;


use Illuminate\Http\Resources\Json\ResourceCollection;

class IssueCollection extends ResourceCollection
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
            'title' =>$this->title,
            'body' =>$this->body,
            'uuid' =>$this->uuid,
            'slug' =>$this->slug,
            'href' => [
                'link' => route('issues.show',$this->id)
            ]
    ];
    }
}
