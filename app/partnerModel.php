<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partnerModel extends Model
{
   	protected $primaryKey='id';
    protected $table='tbl_partner';
    protected $fillable=['name','link'];
    public $timestamps = false;
}
