<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $fillable =[
        'title', 'details', 'uid'
    ];
}
