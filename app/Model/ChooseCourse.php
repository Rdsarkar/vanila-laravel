<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ChooseCourse extends Model
{
    //
    protected $fillable=[
         'fees', 'paid','cid', 'uid',
    ];
}
