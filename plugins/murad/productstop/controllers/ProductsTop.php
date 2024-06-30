<?php namespace Murad\Productstop\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class ProductsTop extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Murad.Productstop', 'main-menu-item');
    }

}
