<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['name' , 'organisation' , 'expert community' ,
        'direction' , 'category' , 'education' , 'academic degree' ,
        'academic rank' , 'scientific interests area' ,
        'admission form' , 'examination status'];

}
