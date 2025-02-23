<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $table = 'clubs';
    protected $fillable = [
        'name',
        'description',
        'logo',
        'categorie'
    ];

    public function inscription (){
        return $this->hasMany(inscription::class);
    }

    public function posts (){
        return $this->hasMany(Post::class);
    }
}
