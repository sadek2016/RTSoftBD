<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class featureModel extends Model
{
   	protected $primaryKey='id';
    protected $table='tbl_feature';
    protected $fileable=['site_slogan','feature_title','feature_slogan','feature_icon'];
    public $timestamps = false;
}
