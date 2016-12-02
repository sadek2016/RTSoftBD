<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class recentWorkModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_recent_work';
    protected $fileable=['siteDescription','workTitle','workDescription','bgImage','created_at','updated_at'];

}