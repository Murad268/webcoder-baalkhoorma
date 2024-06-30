<?php namespace Murad\Privacypolicy\Components;

use Cms\Classes\ComponentBase;
use Murad\Aboutcsr\Models\AboutCSR;
use Murad\Privacypolicy\Models\PrivacyPolicy as ModelsPrivacyPolicy;

/**
 * Privacypolicy Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Privacypolicy extends ComponentBase
{
    public $data;

    public function onRun()
    {
        $this->data = ModelsPrivacyPolicy::first();
        $this->page['data'] = $this->data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Privacypolicy Component',
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
