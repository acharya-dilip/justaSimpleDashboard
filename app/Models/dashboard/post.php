<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'description',
        'image_path',
    ];

}
