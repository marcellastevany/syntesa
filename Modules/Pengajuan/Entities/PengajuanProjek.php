<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanProjek extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function lampiran()
    {
        return $this->belongsTo(LampiranPengajuanProjek::class,'lampiran_pengajuan_projek_id', 'pengajuan_projek_id');
    }
}
