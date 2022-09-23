<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pencairan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function lampiran_cair()
    {
        return $this->hasmany(PengajuanBiasa::class);
    }
}
