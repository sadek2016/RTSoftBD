<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyModel extends Model
{
    protected $primaryKey='id';
    protected $table='tbl_company_link';
    protected $fillable=['name','link'];
    public $timestamps = false;
}
