<?php namespace Murad\Homepageabouthistorytext\Models;

use Model;

/**
 * Model
 */
class HomePageAboutHistoryText extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['text', 'map'];
    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_homepageabouthistorytext_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'text' => 'required',
    ];
    
    
    
     public $attachOne = [
        'map' => \System\Models\File::class
    ];
}
