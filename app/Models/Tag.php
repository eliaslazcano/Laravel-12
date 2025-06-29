<?php

namespace App\Models;

use Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /** @use HasFactory<TagFactory> */
    use HasFactory;

    public function jobs(): BelongsToMany
    {
      # Esse é o modo simplificado. Para o modo completo veja a classe Job (função `tags`)
      return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }
}
