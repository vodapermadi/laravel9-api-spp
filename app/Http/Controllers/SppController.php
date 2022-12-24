<?php

namespace App\Http\Controllers;

use App\Http\Requests\SppRequest;
use App\Http\Resources\SppResource;
use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
        return SppResource::collection(Spp::all());
    }

    public function show(Spp $spp)
    {
        return new SppResource($spp);
    }

    public function store(SppRequest $request)
    {
        Spp::create($request->validated());
        return response()->json('data created');
    }

    public function update(SppRequest $request,Spp $spp)
    {
        $spp->update($request->validated());
        return response()->json('data updated');
    }

    public function destroy(Spp $spp)
    {
        $spp->delete();
        return response()->json('data deleted');
    }
}
