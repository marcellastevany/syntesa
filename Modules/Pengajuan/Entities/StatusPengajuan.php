<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusPengajuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    // public function status()
    // {
    //     return $this->hasmany(PengajuanBiasa::class);
    // }
}
