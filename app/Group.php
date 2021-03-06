<?php

namespace App;

use App\Agenda;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded =[];

    public function agendas()
    {
        $this->hasMany(Agenda::class);
    }
}
