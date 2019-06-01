<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rating extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'agent_id'=> $this->agent_id,
            'user_id'=> $this->user_id,
            'rating'=> $this->rating,

        ];
    }
}
