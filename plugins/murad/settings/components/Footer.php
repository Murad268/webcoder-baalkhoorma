<?php namespace Murad\Settings\Components;

use Cms\Classes\ComponentBase;
use Murad\Settings\Models\Settings;

/**
 * Footer Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Footer extends ComponentBase
{
    public function onRun()
    {
        $logo = Settings::first()->footer_logo;
        $copywrite = Settings::first()->copywrite_text;
        $settings = Settings::first();


        $this->page['footer_logo'] = $logo;
        $this->page['copywrite'] = $copywrite;
        $this->page['settings'] = $settings;


    }
    public function componentDetails()
    {
        return [
            'name' => 'Footer Component',
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
