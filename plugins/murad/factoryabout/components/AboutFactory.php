<?php namespace Murad\Factoryabout\Components;

use Cms\Classes\ComponentBase;
use Murad\Factoryabout\Models\FactoryAbout;

/**
 * AboutFactory Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AboutFactory extends ComponentBase
{
    public function onRun()
    {
        $data = FactoryAbout::first();
        $this->page['data'] = $data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'AboutFactory Component',
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
