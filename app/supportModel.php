<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supportModel extends Model
{
   
    protected $primaryKey='id';
    protected $table='tbl_support';
    protected $fillable=['name','link'];
    public $timestamps = false;
}
