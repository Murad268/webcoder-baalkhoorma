<?php namespace Murad\Abouthistory\Components;

use Cms\Classes\ComponentBase;
use Murad\Abouthistory\Models\AboutHistory as ModelsAboutHistory;

/**
 * AboutHistory Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AboutHistory extends ComponentBase
{
    public function onRun()
    {
        $data = ModelsAboutHistory::first();
        $this->page['data'] = $data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'AboutHistory Component',
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
