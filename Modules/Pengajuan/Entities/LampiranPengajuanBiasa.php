<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LampiranPengajuanBiasa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function lampiran()
    {
        return $this->hasmany(PengajuanBiasa::class);
    }
}
