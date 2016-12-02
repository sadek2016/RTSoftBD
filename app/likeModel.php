<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likeModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_like';
    protected $fillable=['title','slogan'];
    public $timestamps = false;
}
