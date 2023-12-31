<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $table = 'counters';
    protected $fillable = ['name', 'counter'];
    protected $translatable = ['name'];
}
