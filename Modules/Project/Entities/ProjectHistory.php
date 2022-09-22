<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function biayaHistory()
    {
        return $this->hasMany(BiayaHistory::class, 'project_history_id');
    }
    public function pendapatanHistory()
    {
        return $this->hasMany(PendapatanHistory::class, 'project_history_id');
    }
    public function projectHead()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
