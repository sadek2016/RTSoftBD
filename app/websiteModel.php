<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class websiteModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_company';
    protected $fillable=['name'];
    public $timestamps = false;
}
