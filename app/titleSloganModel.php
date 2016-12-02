<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class titleSloganModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_slogan';
    protected $fileable=['mobile','logo'];
    public $timestamps = false;
}
