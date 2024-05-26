<?php

namespace Modules\Document\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'name',
        'size'
    ];

    protected $attributes = [
        'size' => 0
    ];
}
