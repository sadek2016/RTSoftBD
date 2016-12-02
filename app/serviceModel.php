<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_service';
    protected $fillable=['service_slogan','title','slogan','icon'];
    public $timestamps = false;
}
