<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkoutResource extends JsonResource
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
            'id' => $this->id,
            'workout_date' => $this->workout_date,
            'exercise_name' => $this->exercise_name,
            'weight_lifted' => $this->weight_lifted,
            'max_percentage' => $this->max_percentage,
            'is_successful' => $this->is_successful,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
