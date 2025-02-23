<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class inscription extends Model
{
    use HasFactory;
    protected $fillable = ['club_id','user_name'];
    
    public function club(){
        return $this->belongsTo(Club::class);
    }
}
