<?php namespace Murad\Abouthistory\Models;

use Model;

/**
 * Model
 */
class AboutHistory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['text1', 'text2'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_abouthistory_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'text2' => ['required'],
    ];
    public $attachOne = [
        'image' => \System\Models\File::class,
        'video_image' => \System\Models\File::class,
    ];
}
