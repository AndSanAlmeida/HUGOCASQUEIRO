<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    public $translatable = ['name'];
    protected $fillable = [
        'filter',
    ];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
