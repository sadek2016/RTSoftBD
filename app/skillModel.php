<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skillModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_skill';
    protected $fillable=['skill_slogan','category','pertancag','color'];
    public $timestamps = false;
}
