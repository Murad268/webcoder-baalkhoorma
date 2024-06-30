<?php namespace Murad\Products\Models;

use Model;
use Murad\Categories\Models\Categories;

/**
 * Model
 */
class Products extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'short_desc', 'desc', 'benefits', 'production', 'details', 'order_proccess', 'spesifications'];
    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_products_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'title' => 'required',
        'images' => 'required',
        'benefits' => 'required',
         'desc' => 'required',
        'production' => 'required',
        'slug' => 'required',
        'details' => 'required',
        'order_proccess' => 'required',
        
    ];
    public $attachOne = [
        'home_page_slider_image' => \System\Models\File::class,
    ];

    public $attachMany = [
        'images' => \System\Models\File::class
    ];


    public $belongsTo = [
        'category' => [Categories::class]
    ];
}
