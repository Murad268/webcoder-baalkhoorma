<?php namespace Murad\Internalprivacypolicy\Models;

use Model;

/**
 * Model
 */
class InternalPrivacyPolicy extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_internalprivacypolicy_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'image' => \System\Models\File::class,
    ];

}
