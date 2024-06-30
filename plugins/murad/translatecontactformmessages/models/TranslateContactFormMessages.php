<?php namespace Murad\Translatecontactformmessages\Models;

use Model;

/**
 * Model
 */
class TranslateContactFormMessages extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['success_message', 'success_title'];


    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_translatecontactformmessages_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
