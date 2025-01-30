<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catge extends Model
{
    protected $table = "category";
    public $timestamps = false;
    protected $fillable = ['name','quality','model_no','img_name'];
}
