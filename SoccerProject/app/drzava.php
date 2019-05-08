<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drzava extends Model
{
    protected $table = "drzave";

    public function igralec(){
        return $this->belongsTo(\App\Models\igralec);
    }
}
