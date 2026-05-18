<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
    protected $table = 'members';

    protected $fillable = ['id','image','name','email','number','tech stack','role'];

     protected $primaryKey = 'id';

}
