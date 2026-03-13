<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Http\Resources\AssessmentResource;
use App\Models\Assessment;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::with('hazards')->paginate(10);

        return AssessmentResource::collection($assessments);
    }
    public function show(Assessment $assessment): AssessmentResource
    {
        $assessment->load('hazards');

        return new AssessmentResource($assessment);
    }

    public function update(UpdateAssessmentRequest $request, Assessment $assessment): AssessmentResource
    {
        $assessment->update($request->validated());
        $assessment->load('hazards');

        return new AssessmentResource($assessment);
    }
}