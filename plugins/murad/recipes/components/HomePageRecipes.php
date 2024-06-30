<?php namespace Murad\Recipes\Components;

use Cms\Classes\ComponentBase;
use Murad\Recipes\Models\RECIPES;

/**
 * HomePageRecipes Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class HomePageRecipes extends ComponentBase
{
    public function onRun() {
        $homePageRecipes = RECIPES::paginate(4);
        $this->page['homePageRecipes'] = $homePageRecipes;
    }
    public function componentDetails()
    {
        return [
            'name' => 'HomePageRecipes Component',
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
