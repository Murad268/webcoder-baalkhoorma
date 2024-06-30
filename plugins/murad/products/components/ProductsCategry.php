<?php namespace Murad\Products\Components;

use Cms\Classes\ComponentBase;

/**
 * ProductsCategry Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ProductsCategry extends ComponentBase
{
    public function onRun() {
      
        $slug = $this->param('slug');
        $mainProduct = Products::where('slug', $slug)->first();
    }
    public function componentDetails()
    {
        return [
            'name' => 'ProductsCategry Component',
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
