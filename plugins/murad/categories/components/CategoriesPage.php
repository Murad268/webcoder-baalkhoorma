<?php namespace Murad\Categories\Components;

use Cms\Classes\ComponentBase;
use Murad\Categories\Models\Categories;

/**
 * CategoriesPage Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CategoriesPage extends ComponentBase
{

    public function onRun() {
        
        $slug = $this->param('slug');
        $categoryInfo = Categories::where('slug', $slug)->first();
        $this->page['categoryInfo'] = $categoryInfo;
    }
    public function componentDetails()
    {
        return [
            'name' => 'CategoriesPage Component',
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
