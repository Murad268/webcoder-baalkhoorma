<?php namespace Murad\Factoryproccess\Components;

use Cms\Classes\ComponentBase;
use Murad\Factoryproccess\Models\FactoryProccess;

/**
 * Proccess Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Proccess extends ComponentBase
{
    public function onRun()
    {
        $datas = FactoryProccess::all();
        $this->page['datas'] = $datas;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Proccess Component',
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
