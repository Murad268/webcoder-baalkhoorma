<?php namespace Murad\Settings;

use Murad\Settings\Components\Footer;
use Murad\Settings\Components\Header;
use Murad\Settings\Components\Meta;
use Murad\Settings\Components\Title;
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
            Header::class => 'header',
            Footer::class => 'footer',
            Meta::class => 'meta',
            Title::class => 'lang'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
