<?php namespace Murad\Contactform\Models;

use Model;

/**
 * Model
 */
class ContactForm extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_contactform_';
    protected $guarded = [];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
