<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Service extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'body'];

    protected $fillable = [
        'identifier',
    ];
}
