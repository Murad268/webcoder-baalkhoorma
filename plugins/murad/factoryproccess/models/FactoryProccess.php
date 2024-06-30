<?php namespace Murad\Factoryproccess\Models;

use Model;

/**
 * Model
 */
class FactoryProccess extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['proccess_name'];
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_factoryproccess_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'proccess_name' => 'required',
        'image' => 'required',
    ];

    public $attachOne = [
        'image' => \System\Models\File::class,
    ];

}
