<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_about';
    protected $fillable=['slogan','image'];
    public $timestamps = false;
}
