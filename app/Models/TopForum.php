<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopForum extends Model
{
    use HasFactory;
    protected $table = 'topforum';
    protected $fillable = ['forum_id', 'position'];
}
