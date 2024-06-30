<?php namespace Murad\News\Models;

use Model;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'desc'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_news_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'title' => ['required'],
        'desc' => ['required'],
        'slug' => ['required'],
    ];
    public $attachOne = [
        'image' => \System\Models\File::class
    ];
       public $attachMany = [
        'images' => \System\Models\File::class,
    ];
}
