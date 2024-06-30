<?php namespace Murad\Categories\Components;

use Cms\Classes\ComponentBase;
use Config;
use Murad\Categories\Models\Categories as ModelsCategories;
use Illuminate\Support\Facades\Route;

/**
 * Categories Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Categories extends ComponentBase
{
    public function onRun()
    {
        $route = Config::get('app.url');
        $categories = ModelsCategories::where('parent_id', null)->where('is_active', 1)->get();
        $this->page['categories'] = $categories;
        $this->page['route'] = $route;

    }
    public function componentDetails()
    {
        return [
            'name' => 'Categories Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
