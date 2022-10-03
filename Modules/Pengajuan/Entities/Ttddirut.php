<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttddirut extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function ttddirut()
    {
        return $this->belongsTo(Project::class);
    }
    
}
