<?php namespace Murad\Products\Components;

use Cms\Classes\ComponentBase;

use Murad\Categories\Models\Categories;
/**
 * HomePageSlider Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class HomePageSlider extends ComponentBase
{
    public function onRun() {
       
        $this->page['randomProducts'] = Categories::where('is_active', 1)->where('parent_id', null)->get();
    }
    public function componentDetails()
    {
        return [
            'name' => 'HomePageSlider Component',
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
