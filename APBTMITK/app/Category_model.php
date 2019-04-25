<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
    protected $table='categories';
    protected $primaryKey='id';
    protected $fillable=['name'];
}
