<?php

namespace Modules\Pengajuan\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanBiasa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasMany(User::class );
    }

    public function lampiran()
    {
        return $this->belongsTo(LampiranPengajuanBiasa::class,'lampiran_pengajuan_biasa_id', 'pengajuan_biasa_id');
    }
    public function lampiran_cair()
    {
        return $this->belongsTo(Pencairan::class);
    }
    public function kategori()
    {
        return $this->belongsTo(kategori_pengajuan::class, 'kategori_pengajuan_id' , 'pengajuan_biasa_id'  );
    }

    public function histori()
    {
        return $this->belongsTo(HistoriPengajuanBiasa::class,'histori_pengajuan_biasa_id', 'pengajuan_biasa_id');
    }
    public function role()
    {
        return $this->hasMany(Role::class,'role_id','pengajuan_biasa_id');
    }
    public function divisi()
    {
        return $this->hasMany(Divisi::class);
    }
   
   
}
