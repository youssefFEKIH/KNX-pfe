<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    protected $table='quizzes';
    protected $fillable = ['id','quiz','chapitre_id'];
    public function enonce()
    {
        return $this->hasMany('App\Models\enonce');
    }

}
