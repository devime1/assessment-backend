<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHazardRequest;
use App\Http\Requests\UpdateHazardRequest;
use App\Http\Resources\HazardResource;
use App\Models\Assessment;
use App\Models\Hazard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HazardController extends Controller
{
    public function index(Assessment $assessment): AnonymousResourceCollection
    {
        $hazards = $assessment->hazards;

        return HazardResource::collection($hazards);
    }

    public function store(StoreHazardRequest $request, Assessment $assessment): HazardResource
    {
        $hazard = $assessment->hazards()->create($request->validated());

        return new HazardResource($hazard);
    }

    public function update(UpdateHazardRequest $request, Hazard $hazard): HazardResource
    {
        $hazard->update($request->validated());

        return new HazardResource($hazard);
    }

    public function destroy(Hazard $hazard): JsonResponse
    {
        $hazard->delete();

        return response()->json([
            'message' => 'Hazard deleted successfully.',
        ]);
    }
}
