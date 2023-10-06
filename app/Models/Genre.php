<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;

    public function artists() : BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }

    public function albums() : BelongsToMany
    {
        return $this->belongsToMany(Album::class);
    }
}
