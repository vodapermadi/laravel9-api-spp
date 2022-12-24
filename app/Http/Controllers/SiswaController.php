<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Http\Resources\SiswaResource;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return SiswaResource::collection($siswa);
    }

    public function show(Siswa $siswa)
    {
        return new SiswaResource($siswa);
        // return ddd($siswa);
    }

    public function store(SiswaRequest $request)
    {
        Siswa::create($request->validated());
        return response()->json('data created');
    }

    public function update(SiswaRequest $request,Siswa $siswa)
    {
        $siswa->update($request->validated());
        return response()->json('data update');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return response()->json('data deleted');
    }
}
