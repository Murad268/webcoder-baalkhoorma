<?php namespace Murad\Homepageabouthistorytext\Components;

use Cms\Classes\ComponentBase;
use Murad\Homepageabouthistorytext\Models\HomePageAboutHistoryText;

/**
 * HomePageAboutText Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class HomePageAboutText extends ComponentBase
{

    public function onRun() {
        $story = HomePageAboutHistoryText::first();
        $this->page['story'] = $story;
    }
    public function componentDetails()
    {
        return [
            'name' => 'HomePageAboutText Component',
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
