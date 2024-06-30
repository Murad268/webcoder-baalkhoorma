<?php namespace Murad\Factoryabout\Models;

use Model;

/**
 * Model
 */
class FactoryAbout extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['text1', 'text2'];
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_factoryabout_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'text1' => 'required',
        'text2' => 'required',
    ];
    public $attachOne = [
        'image1' => \System\Models\File::class,
        'image2' => \System\Models\File::class,
    ];
}
