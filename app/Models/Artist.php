<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
    public function single(): HasMany
    {
        return $this->hasMany(Single::class);
}
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
