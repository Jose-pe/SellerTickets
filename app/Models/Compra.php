<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    
    protected $table = 'compras';
    protected $fillable = [
        'tipoticket',
        'cantidad',
        'iduser',            
        'estado',
         'total', 
    ];
    public function users(){
        return $this->belongsTo(User::class, 'iduser','id');
    } 
}
