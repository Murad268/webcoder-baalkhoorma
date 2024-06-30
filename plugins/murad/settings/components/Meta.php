<?php namespace Murad\Settings\Components;

use Cms\Classes\ComponentBase;
use Murad\Settings\Models\Settings;

/**
 * Meta Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Meta extends ComponentBase
{
    public function onRun() {
        $settings = Settings::first();
        $this->page['settings'] = $settings;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Meta Component',
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
