<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori_pengajuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function kategori()
    {
        return $this->hasMany(PengajuanBiasa::class);
    }
}