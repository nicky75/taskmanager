<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function findByName(String $name) {
        return $this->where('name', $name)->exists();
    }

    public function deleteById(Int $id) {
        return $this->find($id)->delete();
    }
}
