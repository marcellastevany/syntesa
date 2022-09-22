<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lampiran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function lampiran()
    {
        return $this->belongsTo(Project::class);
    }
    
}
