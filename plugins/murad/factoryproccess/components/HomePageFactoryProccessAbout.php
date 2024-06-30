<?php namespace Murad\Factoryproccess\Components;

use Cms\Classes\ComponentBase;
use Murad\Factoryabout\Models\FactoryAbout;
use Murad\Factoryproccess\Models\FactoryProccess;

/**
 * HomePageFactoryProccessAbout Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class HomePageFactoryProccessAbout extends ComponentBase
{
    public function onRun() {
        $factoryProccessAbout = FactoryAbout::first();
        $this->page['factoryProccessAbout'] = $factoryProccessAbout;
    }
    public function componentDetails()
    {
        return [
            'name' => 'HomePageFactoryProccessAbout Component',
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
