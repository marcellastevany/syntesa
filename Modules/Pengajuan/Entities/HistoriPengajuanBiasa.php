<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoriPengajuanBiasa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function histori()
    {
        return $this->hasmany(PengajuanBiasa::class);
    }

    public function history()
    {
        return $this->hasMany(KeteranganJabatan::class);
    }
    
    
  
}
