<?php

namespace App\Http\Resources;

use App\Models\Kelaz;
use App\Models\Spp;
use Illuminate\Http\Resources\Json\JsonResource;

class SiswaResource extends JsonResource
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
            'nisn' => $this->nisn,
            'nis' => $this->nis,
            'nama' => $this->nama,
            'id_kelas' => Kelaz::find($this->id_kelas),
            'alamat' => $this->alamat,
            'no_telp' => $this->no_telp,
            'id_spp' => Spp::find($this->id_spp)
        ];
    }
}
