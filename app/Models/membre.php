<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class membre extends Model implements Authenticatable
{
    use BasicAuthenticatable; 
    protected $table='membres';
    protected $fillable = ['mail', 'mot_de_passe'];

    public function getAuthPassword()
{
    return $this->mot_de_passe;
}
}
