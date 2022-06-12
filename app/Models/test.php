<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{ 
    protected $table='tests';
    protected $fillable = ['id','nom','note','cours_id'];
    use HasFactory;
    public function question()
    {
        return $this->hasMany('App\Models\question');
    }
}
