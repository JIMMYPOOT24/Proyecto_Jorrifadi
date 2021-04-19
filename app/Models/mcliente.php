<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\mproyecto;

class mcliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';



    public function mproyectos(){

       // $proyecto = mproyecto::where('clientes_id', $this->id)->first();
        return $this->hasOne(mproyecto::class);


    }

}
