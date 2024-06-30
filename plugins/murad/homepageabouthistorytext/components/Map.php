<?php namespace Murad\Homepageabouthistorytext\Components;
use Murad\Homepageabouthistorytext\Models\HomePageAboutHistoryText;
use Cms\Classes\ComponentBase;


/**
 * HomePageAboutText Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Map extends ComponentBase
{

    public function onRun() {
         $map = HomePageAboutHistoryText::first()->map;
         $this->page['map'] = $map;
       
    }
 
    public function componentDetails()
    {
        return [
            'name' => 'Map Component',
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
