<?php namespace Murad\News;

use Murad\News\Components\News;
use Murad\News\Components\NewssRandom;
use Murad\News\Components\SearchResultsForBlogs;
use Murad\News\Components\SearchResultsForNews;
use Murad\News\Components\SearchResultsForRecipes;
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
            News::class => 'news',
            NewssRandom::class => 'newsrandom',
            SearchResultsForNews::class => 'news_results',
            SearchResultsForRecipes::class => 'recipes_results',
            SearchResultsForBlogs::class => 'search_blogs'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
