<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category_id' => $this->category_id,
            'category_name' => $this->category->name
        ];
    }

    public function with($request)
    {
        return [
            'code' => 16002000,
            'message'  => 'success',
            'version' => '1.0.0',
            'author_url' => url('https://kongkannika.wordpress.com'),
        ];
    }
}
