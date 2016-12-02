<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_contact';
    protected $fileable=['name','email','address','message'];
    public $timestamps = false;
}
