<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelB extends Model
{
    /** @use HasFactory<\Database\Factories\ModelBFactory> */
    use HasFactory;

    protected $table = 'b';


    public function a(): BelongsToMany
    {
        return $this->belongsToMany(ModelA::class, 'a_b', 'b_id', 'a_id');
    }
}
