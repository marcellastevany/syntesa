<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttdmanagerop extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function ttdmanagerop()
    {
        return $this->belongsTo(Project::class);
    }
    
}
