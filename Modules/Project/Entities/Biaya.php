<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Cviebrock\EloquentSluggable\Sluggable;
class Biaya extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $guarded = ['id'];
    // public function biaya()
    // {
    //     return $this->hasmany(Project::class);
    // }

    // public function sluggable(): array
    // {
    //     return [
    //         'kategori' => [
    //             'source' => 'kategori'
    //         ]
    //     ];
    // }
}
