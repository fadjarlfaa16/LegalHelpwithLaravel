<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopConsultant extends Model
{
    use HasFactory;
    protected $table = 'topconsultant';
    protected $fillable = ['user_id', 'position'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
