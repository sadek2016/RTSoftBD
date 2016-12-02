<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teamModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_team';
    protected $fileable=['name','title','description','facebook','twitter','googleplus','image'];
    public $timestamps = false;
}
