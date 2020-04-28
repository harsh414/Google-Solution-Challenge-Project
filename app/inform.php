<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inform extends Model
{
    protected $table= 'informs';
    protected $fillable= ['name','email','address','contact','image','description','opt'];
}
