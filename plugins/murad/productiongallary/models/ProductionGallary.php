<?php namespace Murad\Productiongallary\Models;

use Model;

/**
 * Model
 */
class ProductionGallary extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_productiongallary_';
 
    /**
     * @var array rules for validation.
     */
    public $rules = [
        'image' => 'required',
    ];

    public $attachOne = [
        'image' => \System\Models\File::class
    ];
}
