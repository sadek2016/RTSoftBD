<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_social';
    protected $fillable=['facebook','twitter','linkedin','googleplus','skype'];
    public $timestamps = false;
}
