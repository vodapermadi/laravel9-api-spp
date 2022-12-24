<?php

namespace App\Http\Resources;

use App\Models\Officer;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Resources\Json\JsonResource;

class PembayaranResource extends JsonResource
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
            'id_petugas' => Officer::find($this->id_petugas),
            'id_siswa' => Siswa::find($this->id_siswa),
            'tanggal_bayar' => $this->tanggal_bayar,
            'id_spp' => Spp::find($this->id_spp),
            'jumlah_bayar' => $this->jumlah_bayar,
        ];
    }
}
