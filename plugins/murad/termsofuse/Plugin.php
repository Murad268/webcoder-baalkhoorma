<?php namespace Murad\Termsofuse;

use System\Classes\PluginBase;
use Murad\TermsOfUse\Components\TermsOfUse as ComponentsTermsOfUse;

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
            ComponentsTermsOfUse::class => "terms_of_use"
        ];

    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
