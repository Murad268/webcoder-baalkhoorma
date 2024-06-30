<?php namespace Murad\Aboutcsr\Components;

use Cms\Classes\ComponentBase;
use Murad\Aboutcsr\Models\AboutCSR as ModelsAboutCSR;

/**
 * AboutCsr Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AboutCsr extends ComponentBase
{

    public function onRun()
    {
        $data = ModelsAboutCSR::first();
        $this->page['data'] = $data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'AboutCsr Component',
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
