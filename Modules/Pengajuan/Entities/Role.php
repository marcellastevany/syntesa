<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function role()
    {
        return $this->belongsTo(PengajuanBiasa::class);
    }
    
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
    
    public function jabatanrole()
    {
        return $this->hasMany(KeteranganJabatan::class);
    }
    public function rolep()
    {
        return $this->belongsTo(Project::class);
    }
}
