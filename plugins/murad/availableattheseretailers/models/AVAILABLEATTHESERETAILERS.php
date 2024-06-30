<?php namespace Murad\Availableattheseretailers\Models;

use Model;

/**
 * Model
 */
class AVAILABLEATTHESERETAILERS extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_availableattheseretailers_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'title' => 'required',
    ];
    public $attachOne = [
        'image' => \System\Models\File::class
    ];
}
