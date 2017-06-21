<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';



    protected $fillable = ['file'];





    public function getFileAttribute($photo){
// ovde je bitna konvencija getFileAttribute



        return $this->uploads . $photo;



    }


}
