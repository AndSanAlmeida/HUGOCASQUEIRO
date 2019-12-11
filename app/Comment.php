<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Comment extends Model
{
    use HasTranslations;

    public $translatable = ['body'];
    protected $fillable = [
        'name','photo'
    ];
}
