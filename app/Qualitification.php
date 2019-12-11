<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualitification extends Model
{
    public $timestamps=false;
    public $table = "qualitification";
    protected $primaryKey = 'id';
    protected $fillable = ['id','month','point','descryption','professional_id'];
}
