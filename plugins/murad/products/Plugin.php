<?php namespace Murad\Products;

use Murad\Categories\Components\CategoriesPage;
use Murad\Products\Components\DetailPage;
use Murad\Products\Components\HomePageSlider;
use Murad\Products\Components\Products as ComponentsProducts;
use Murad\Products\Components\SearchProducts;
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
            ComponentsProducts::class => 'products',
            DetailPage::class => 'detail',
            CategoriesPage::class => 'categories_top',
            SearchProducts::class => 'search_products',
            HomePageSlider::class => 'home_page_slider'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
