<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HazardResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'status' => $this->status,
            'description' => $this->description,
            'review_date' => optional($this->review_date)->format('Y-m-d'),
            'risk_level' => $this->risk_level,
            'severity' => $this->severity,
            'likelihood' => $this->likelihood,
            'assessment_id' => $this->assessment_id,
            'hazards' => HazardResource::collection($this->whenLoaded('hazards')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
