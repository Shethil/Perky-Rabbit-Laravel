<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

}
