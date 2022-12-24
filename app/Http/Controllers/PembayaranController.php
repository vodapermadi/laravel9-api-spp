<?php

namespace App\Http\Controllers;

use App\Http\Requests\PembayaranRequest;
use App\Http\Resources\PembayaranResource;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return PembayaranResource::collection(Pembayaran::all());
    }

    public function store(PembayaranRequest $request)
    {
        Pembayaran::create($request->validated());
        return response()->json('data created successfuly');
    }

    public function show(Pembayaran $pembayaran)
    {
        return new PembayaranResource($pembayaran);
    }

    public function update(PembayaranRequest $request,Pembayaran $pembayaran)
    {
        $pembayaran->update($request->validated());
        return response()->json('data updated successfuly');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return response()->json('data deleted successfuly');
    }
}
