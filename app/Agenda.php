<?php

namespace App;

use App\Http\Homework;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 * @package App
 */
class Agenda extends Model
{
    /**
     * @var array
     */
    protected $guarded =[];

    /**
     *
     */
    public function group()
    {
        $this->belongsTo(Group::class);
    }

    /**
     *
     */
    public function homework()
    {
        $this->belongsTo(Homework::class);
    }

    /**
     *
     */
    public function study()
    {
        $this->belongsTo(Study::class);
    }

}
