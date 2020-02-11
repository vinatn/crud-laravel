<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel()
    {
        // Model Kategori bisa memiliki banyak data
        // dari model Artikel melalui kategori_id
        return $this->hasMany('App\Artikel','kategori_id');
    }

}
