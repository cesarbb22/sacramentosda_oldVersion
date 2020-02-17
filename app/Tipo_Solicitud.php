<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class Tipo_Solicitud extends Model
{
    protected $table = 'Tipo_Solicitud';
    
    protected $primaryKey = 'IDTipo_Solicitud';
    
    protected $fillable = array('NombreTipo_Solicitud');
    
    public $timestamps = true;

    protected $dateFormat = 'Y-m-d H:i:s';
}
