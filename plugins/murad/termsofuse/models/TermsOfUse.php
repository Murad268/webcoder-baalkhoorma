<?php namespace Murad\Termsofuse\Models;

use Model;

/**
 * Model
 */
class TermsOfUse extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'description'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_termsofuse_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'title' => ['required'],
        'description' => ['required'],
    ];
}
