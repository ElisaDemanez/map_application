<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = ['icon', 'color', 'weight', 'fk_category_id'];
}
