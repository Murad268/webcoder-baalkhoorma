<?php namespace Murad\Categories;

use Murad\Categories\Components\Categories;
use Murad\Categories\Components\CategoriesPageCategories;
use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            Categories::class => 'categories',
            CategoriesPageCategories::class => 'sub_categories'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
