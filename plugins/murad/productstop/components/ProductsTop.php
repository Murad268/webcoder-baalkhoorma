<?php namespace Murad\Productstop\Components;

use Cms\Classes\ComponentBase;
use Murad\Productstop\Models\ProductsTop as ModelsProductsTop;

/**
 * ProductsTop Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ProductsTop extends ComponentBase
{
    public function onRun()
    {
        $data = ModelsProductsTop::first();
        $this->page['data'] = $data;
    }
    public function componentDetails()
    {
        return [
            'name' => 'ProductsTop Component',
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
