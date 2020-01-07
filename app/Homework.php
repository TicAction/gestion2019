<?php

namespace App;

use App\Agenda;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $guarded =[];

    public function agendas()
    {
        $this->hasMany(Agenda::class);
    }
}
