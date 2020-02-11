<?php
  
namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul','slug','deskripsi','foto','user_id','kategori_id'
    ];

    public $timestamps = true;

    public function kategori()
    {
        // data model 'Artikel' bisa dimiliki oleh model 'kategori'
        // melalui 'kategori_id'
        return $this->belongsTo('App\Kategori','kategori_id');
    }
    public function user()
    {
        // data model 'Artikel' bisa dimiliki oleh model 'user'
        // melalui 'kategori_id'
        return $this->belongsTo('App\User','user_id');
    }
    public function tag()
    {
        // Model 'Tag' memiliki relasi Many to Many
        // (belongsToMany) terhadap model 'Tag' yang tehubung oleh
        // table 'artikel_tag' masing-masing sebagai 'Tag_id' dan
        // 'artikel_id'
        return $this->belongsToMany(
        'App\Tag',
        'artikel_tag',
        'artikel_id',
        'tag_id'
        );
    }
}
