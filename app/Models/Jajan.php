<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jajan extends Model
{
    use HasFactory;
    protected $table='jajan';
    public function jenis()
    {
        return $this->belongsTo(Jenis::class,'jenis_id','id');
    }

}
