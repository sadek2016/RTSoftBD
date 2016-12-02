<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siteDescriptionModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_site';
    protected $fillable=['feature','work','service','like','about','skill','team','client_say','portfolio','reach_us','message'];
    public $timestamps = false;


}
