<?php

namespace Murad\Homepageabouthistorytext;

use Murad\Factoryproccess\Components\HomePageFactoryProccessAbout;
use Murad\Homepageabouthistorytext\Components\HomePageAboutText;
use Murad\Homepageabouthistorytext\Components\Map;
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
            HomePageAboutText::class => 'home_page_about_text',
            HomePageFactoryProccessAbout::class => 'home_page_factory_proccess_about',
            Map::class => 'map'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
