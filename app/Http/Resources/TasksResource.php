<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TasksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'attributes' => [
               'name' => $this->name,
               'description' => $this->description,
               'priority' => $this->priority,
               'createdAt' => $this->created_at,
               'updatedAt' => $this->updatedAt,
            ],
            'user' => [
               'id' => $this->user->id,
               'username' => $this->user->name,
               'user email' => $this->user->email,
            ]
        ];
    }
}