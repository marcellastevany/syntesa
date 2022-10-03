<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttddirop extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function ttddirop()
    {
        return $this->belongsTo(Project::class);
    }
    
}
