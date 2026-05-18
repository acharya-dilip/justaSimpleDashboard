<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    protected $primaryKey = ['id'];
    protected $fillable = ['agenda','time','context', 'location','locationLink'];

    use HasFactory;
}
