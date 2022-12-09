<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function events()
    {
        return $this->hasManyThrough(ProjectEvent::class, Project::class);
    }
}
