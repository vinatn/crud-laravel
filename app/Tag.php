<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function artikel()
    {
        // Model 'Tag' memiliki relasi Many to Many
        // (belongsToMany) terhadap model 'Artikel' yang tehubung oleh
        // table 'artikel_tag' masing-masing sebagai 'Artikel_id' dan
        // 'tag_id'
        return $this->belongsToMany(
        'App\Artikel',
        'artikel_tag',
        'tag_id',
        'artikel_id'
    );
    }
} 

