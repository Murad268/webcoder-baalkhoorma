<?php namespace Murad\Availableattheseretailers\Components;

use Cms\Classes\ComponentBase;
use Murad\Availableattheseretailers\Models\AVAILABLEATTHESERETAILERS as ModelsAVAILABLEATTHESERETAILERS;

/**
 * AVAILABLEATTHESERETAILERS Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AVAILABLEATTHESERETAILERS extends ComponentBase
{
    public function onRun()
    {
        $avaliables = ModelsAVAILABLEATTHESERETAILERS::all();
        $this->page['avaliables'] = $avaliables;
    }
    public function componentDetails()
    {
        return [
            'name' => 'AVAILABLEATTHESERETAILERS Component',
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
