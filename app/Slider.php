<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Slider extends Model
{
    use HasTranslations;
    public $translatable = ['title', 'body'];

    protected $fillable = [
        'path',
    ];
}
