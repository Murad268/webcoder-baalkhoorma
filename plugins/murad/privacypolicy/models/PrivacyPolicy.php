<?php namespace Murad\Privacypolicy\Models;

use Model;

/**
 * Model
 */
class PrivacyPolicy extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'description'];
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_privacypolicy_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
