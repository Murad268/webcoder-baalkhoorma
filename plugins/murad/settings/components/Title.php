<?php namespace Murad\Settings\Components;

use App;
use Cms\Classes\ComponentBase;

/**
 * Title Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Title extends ComponentBase
{
    public function onRun() {
        $lang = App::getLocale();
        $this->page['lang'] = $lang;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Title Component',
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
