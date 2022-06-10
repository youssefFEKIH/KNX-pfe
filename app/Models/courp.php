<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courp extends Model
{
    protected $table='Courp';
    protected $fillable = ['nom','resumer','description','nb','dated','heured','datef','heuref','statut','url_image'];
    protected $hidden =['pivot'];
    use HasFactory;
    public function membres(){
        return $this->belongsToMany('App\Models\membre', 'membre_courp', 'courp_id', 'membre_id','id','id'); 

    }
}
