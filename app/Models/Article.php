<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['headline', 'picture_path', 'content'];

    public function topArticle()
    {
        return $this->hasOne(TopArticle::class);
    }
}
