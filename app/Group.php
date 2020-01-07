<?php

namespace App;

use App\Http\Homework;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded =[];

    public function homeworks()
    {
        $this->belongsTo(Homework::class);
    }}
