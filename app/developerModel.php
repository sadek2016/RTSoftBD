<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developerModel extends Model
{
     protected $primaryKey='id';
    protected $table='tbl_developers';
    protected $fillable=['name','link'];
    public $timestamps = false;
}
