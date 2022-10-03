<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttdmankeu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function ttdmankeu()
    {
        return $this->belongsTo(Project::class);
    }
    
}
