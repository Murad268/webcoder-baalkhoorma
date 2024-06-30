<?php namespace Murad\Settings\Components;

use Cms\Classes\ComponentBase;
use Lang;
use Murad\Categories\Models\Categories;
use Murad\Settings\Models\Settings;

;
/**
 * Header Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Header extends ComponentBase
{
    public function onRun() {
        $logo = Settings::first()->nav_logo;
        $categories_for_header = Categories::where('parent_id', null)->where('is_active', 1)->get();
        $this->page['nav_logo'] = $logo;
        $this->page['categories_for_header'] = $categories_for_header;
    }

    public function componentDetails()
    {
        return [
            'name' => 'Header Component',
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
