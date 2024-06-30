<?php namespace Murad\Products\Components;

use Cms\Classes\ComponentBase;
use Murad\Products\Models\Products as ModelsProducts;

/**
 * Products Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Products extends ComponentBase
{
    public function onRun() {
     
        $perPage = 9;

        $mainProducts = ModelsProducts::orderByDesc('created_at')->where('is_active', 1)->take($perPage)->get();;
        $this->page['mainProducts'] = $mainProducts;
        $this->page['page'] = $perPage;
        $hasButton = $perPage >= ModelsProducts::count();
        $this->page['hasButton'] = !$hasButton;


    }
    public function componentDetails()
    {
        return [
            'name' => 'Products Component',
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

    public function onLoadMore()
    {
        $page = post('page');


        $perPage = 9;
        $newPage = $page + $perPage;

        $mainProducts = ModelsProducts::orderByDesc('created_at')->where('is_active', 1)->skip($page)->take($perPage)->get();

        return [
            'html' => $this->renderPartial('products::products', ['mainProducts' => $mainProducts]),
            'page' => $newPage
        ];
    }
}
