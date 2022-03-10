<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'status', 'project_id'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function findByName(String $name) {
        return $this->where('name', $name)->exists();
    }

    public function deleteById(Int $id) {
        return $this->find($id)->delete();
    }
}
