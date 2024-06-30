<?php namespace Murad\Products\Components;

use Cms\Classes\ComponentBase;
use Murad\Products\Models\Products;

/**
 * DetailPage Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class DetailPage extends ComponentBase
{
    public function onRun()
    {
     
        $slug = $this->param('slug');
           
        $mainProduct = Products::where('slug', $slug)->first();

        if ($mainProduct) {
            $category = $mainProduct->category;
            $relatedProducts = Products::inRandomOrder()
                ->where('category_id', $category->id)
                ->where('id', '!=', $mainProduct->id)
                ->limit(10)
                ->get();
                
            $this->page['mainProduct'] = $mainProduct;
            $this->page['relatedProducts'] = $relatedProducts;
        }
    }
    public function componentDetails()
    {
        return [
            'name' => 'DetailPage Component',
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
