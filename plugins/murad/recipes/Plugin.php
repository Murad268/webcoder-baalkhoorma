<?php namespace Murad\Recipes;

use Murad\Recipes\Components\HomePageRecipes;
use Murad\Recipes\Components\RecipesRandom;
use Murad\Recipes\Components\Recipess;
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
            Recipess::class => "recipes",
            RecipesRandom::class => 'related',
            HomePageRecipes::class => 'homepage_recipes',
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
