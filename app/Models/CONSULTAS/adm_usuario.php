<?php

namespace App\Models\CONSULTAS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class adm_usuario extends Model

{
    public $timestamps = false;

    
    use HasFactory;
    

    protected $table = 'core.adm_usuario' ;
    

    protected $fillable = [
        'us_login',
        'us_contrasenia',
        'us_estado'
        
    ];
    
    protected $hidden = [

        ////'us_contrasenia',
        ////'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->us_contrasenia;
    }

    
}
