<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ModelA extends Model
{
    /** @use HasFactory<\Database\Factories\ModelAFactory> */
    use HasFactory;

    protected $table = 'a';

    public function b(): BelongsToMany
    {
        return $this->belongsToMany(ModelB::class, 'a_b', 'a_id', 'b_id');
    }

    protected function displayName(): Attribute
    {
        return Attribute::get(
            fn ($value, array $attributes) => $this->id.' ⋅ '.$this->b->first()->id
        );
    }
}
