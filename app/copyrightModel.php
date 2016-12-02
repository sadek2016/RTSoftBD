<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class copyrightModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_footer';
    protected $fileable=['copyright','link','others'];
    public $timestamps = false;
}
