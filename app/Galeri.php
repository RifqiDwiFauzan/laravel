<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    protected $fillable=[
        'nama','keterangan','patch','user_id'
    ];

    protected $casts=[

    ];
}
