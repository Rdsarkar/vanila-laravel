<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable=[
        'examName', 'examType','marks','cid', 'sid',
   ];
}
