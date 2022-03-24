<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dev extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
        'id' => $this->id,
        'name' => $this->name,
        'email' => $this->email,
        'age' => $this->age,
        'picture' => $this->picture,
        'programmingLanguages' => explode(', ', $this->programmingLanguages)
       ];
    }
}
