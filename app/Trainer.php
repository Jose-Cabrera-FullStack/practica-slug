<?php

namespace projectoLaravel;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'avatar', 'description','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
