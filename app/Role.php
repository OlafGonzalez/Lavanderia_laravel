<?php

namespace Lavanderia;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
{
    return $this
        ->belongsToMany('Lavanderia\User')
        ->withTimestamps();
}
}
