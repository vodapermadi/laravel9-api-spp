<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasRequest;
use App\Http\Resources\KelasResource;
use App\Models\Kelaz;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return KelasResource::collection(Kelaz::all());
    }

    public function show(Kelaz $kelaz)
    {
        return new KelasResource($kelaz);
    }

    public function store(KelasRequest $request)
    {
        Kelaz::create($request->validated());
        return response()->json('data created');
    }

    public function update(KelasRequest $request,Kelaz $kelaz)
    {
        $kelaz->update($request->validated());
        return response()->json('data updated');
    }

    public function destroy(Kelaz $kelaz)
    {
        $kelaz->delete();
        return response()->json('data deleted');
    }
}
