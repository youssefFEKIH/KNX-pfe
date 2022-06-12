<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapitre extends Model
{
    use HasFactory;
    protected $table='chapitres';
    protected $fillable = ['nom','cours_id'];
    public function Quizz()
    {
        return $this->hasMany('App\Models\quiz');
    }
    public function Media()
    {
        return $this->hasMany('App\Models\media');
    }

}

