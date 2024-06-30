<?php namespace Murad\TermsOfUse\Components;

use Cms\Classes\ComponentBase;
use Murad\Termsofuse\Models\TermsOfUse as ModelsTermsOfUse;

/**
 * TermsOfUse Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class TermsOfUse extends ComponentBase
{

    public $data;

    public function onRun()
    {
        $this->data = ModelsTermsOfUse::first();
        $this->page['termsOfUseData'] = $this->data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'TermsOfUse Component',
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
