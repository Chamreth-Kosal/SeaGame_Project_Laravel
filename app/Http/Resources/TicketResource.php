<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'date'=>$this->date,
            'time'=>$this->time,
            'price'=>$this->price,
            'user_id'=>$this->user_id,
            'event_id'=>$this->event_id,
            'stadium_id'=>$this->stadium,
        ];
    }
}
