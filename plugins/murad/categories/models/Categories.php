<?php namespace Murad\Categories\Models;

use Model;
use Murad\Products\Models\Products;

/**
 * Model
 */
class Categories extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\NestedTree;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'desc'];
    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_categories_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    public $attachOne = [
        'image' => \System\Models\File::class,
        'icon' => \System\Models\File::class,
    ];


    public $hasMany = [
        'products' => Products::class
    ];
}
