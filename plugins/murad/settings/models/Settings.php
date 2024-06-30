<?php namespace Murad\Settings\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['copywrite_text', 'internal_quality_policy_text'];
    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_settings_';

    /**
     * @var array rules for validation.
     */
    public $rules = [

    ];


    public $attachOne = [
        'nav_logo' => \System\Models\File::class,
        'footer_logo' => \System\Models\File::class,
        'favicon' => \System\Models\File::class,
    ];
}
