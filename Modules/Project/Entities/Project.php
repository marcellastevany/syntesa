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
    public function histori()
    {
        return $this->belongsTo(HistoriPengajuanProjek::class);
    }
    public function role()
    {
        return $this->hasMany(Role::class,'role_id','project_id');
    }
    public function divisi()
    {
        return $this->hasMany(Divisi::class);
    }
    public function user()
    {
        return $this->hasMany(User::class );
    }
    public function cair_project()
    {
        return $this->belongsTo(PencairanProject::class);
    }
    // public function project_lampiran()
    // {
    //     return $this->belongsTo(LampiranProject::class);
    // }
   
    }
 
