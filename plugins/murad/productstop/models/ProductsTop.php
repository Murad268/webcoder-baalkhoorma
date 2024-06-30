<?php namespace Murad\Productstop\Models;

use Model;

/**
 * Model
 */
class ProductsTop extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'text'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_productstop_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        "title" => 'required',
        'text' => 'required',
        'image' => 'required',
    ];
    public $attachOne = [
        'image' => \System\Models\File::class
    ];
}
