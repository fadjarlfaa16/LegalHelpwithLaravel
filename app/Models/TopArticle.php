<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopArticle extends Model
{
    use HasFactory;
    protected $table = 'toparticle';
    protected $fillable = ['article_id', 'position'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
