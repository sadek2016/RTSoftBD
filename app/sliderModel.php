<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliderModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_siteber';
    protected $fillable=['bg_image','font_image','title','slogan'];
    public $timestamps = false;
}
