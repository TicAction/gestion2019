<?php

namespace App\Http;

use App\Group;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $guarded =[];

    public function group()
    {
        $this->belongsTo(Group::class);
    }

}
