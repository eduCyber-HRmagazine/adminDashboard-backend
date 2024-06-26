<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        "mediaName"
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('value');
    }
}
