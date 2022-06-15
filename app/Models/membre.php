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
    protected $fillable = ['id','mail', 'mot_de_passe'];
    

    public function getAuthPassword()
{
    return $this->mot_de_passe;
}
public function courp(){
    return $this->belongsToMany('App\Models\courp', 'membre_courp', 'membre_id', 'courp_id','id','id'); 
}
public function cours(){
    return $this->belongsToMany('App\Models\cours', 'membre_cours', 'membre_id', 'cours_id','id','id'); 
}
public function reserve($Courp){
    
   return $this->courp()->where('courp_id',$Courp->id)->exists();

  
}
}
