<?php namespace Murad\Products\Components;

use Cms\Classes\ComponentBase;
use Murad\Products\Models\Products;

/**
 * SearchProducts Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SearchProducts extends ComponentBase
{
    public function onRun()
    {
        $perPage = 9;
        $q = $this->param('q');
        $selectedProducts = Products::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->take($perPage)->get();
        $this->page['selectedProducts'] = $selectedProducts;
        $this->page['page'] = $perPage;
        $this->page['q'] = $q;
        $hasButton = $perPage >= Products::count();
        $this->page['hasButton'] = !$hasButton;
    }
    public function componentDetails()
    {
        return [
            'name' => 'SearchProducts Component',
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

        $q = $this->param('q');

        $perPage = 4;
        $newPage = $page + $perPage;
        $selectedProducts = Products::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->skip($page)->take($perPage)->get();

        return [
            'html' => $this->renderPartial('search_products', ['selectedProducts' => $selectedProducts]),
            'page' => $newPage
        ];
    }
}
