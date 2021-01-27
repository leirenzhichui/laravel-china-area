<?php

namespace Ydjharris\Area\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $table = 'areas';
    public $fillable = ['id', 'name', 'parent_id', 'type'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
