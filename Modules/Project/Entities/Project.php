<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function lampiran()
    {
        return $this->hasMany(Lampiran::class, 'project_id');
    }
    public function biaya()
    {
        return $this->hasMany(Biaya::class, 'project_id');
    }
    
    public function pendapatan()
    {
        return $this->hasMany(Pendapatan::class, 'project_id');
    }
    public function historyProject()
    {
        return $this->hasMany(ProjectHistory::class, 'project_id');
    }
    
}
