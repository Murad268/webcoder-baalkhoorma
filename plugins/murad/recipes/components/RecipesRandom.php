<?php namespace Murad\Recipes\Components;

use Cms\Classes\ComponentBase;
use Murad\Recipes\Models\RECIPES;

/**
 * RecipesRandom Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class RecipesRandom extends ComponentBase
{
    public function onRun()
    {
        $slug = $this->param('slug');

        $data = RECIPES::orderByDesc('created_at')->where('slug', '!=', $slug)->paginate(3);
        $this->page['data'] = $data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'RecipesRandom Component',
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
