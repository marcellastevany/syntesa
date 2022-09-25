<?php

namespace Modules\Pengajuan\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Pengajuan\Database\factories\PencairanProjectFactory;

class PencairanProject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function cair_project()
    {
        return $this->hasmany(Project::class);
    }
}
