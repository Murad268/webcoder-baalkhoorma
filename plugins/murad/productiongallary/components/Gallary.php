<?php namespace Murad\Productiongallary\Components;

use Cms\Classes\ComponentBase;
use Murad\Productiongallary\Models\ProductionGallary;

/**
 * Gallary Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Gallary extends ComponentBase
{
    public function onRun()
    {
        $perPage = 9;
        $data = ProductionGallary::orderByDesc('created_at')->take($perPage)->get();

        $this->page['data'] = $data;
        $this->page['page'] = $perPage;
    }
    public function componentDetails()
    {
        return [
            'name' => 'Gallary Component',
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
        $page = post('page', 1);
        $perPage = 4;
        $newPage = $page + $perPage;


        $data = ProductionGallary::orderByDesc('created_at')->skip($page)->take($perPage)->get();;

        return [
            'html' => $this->renderPartial('gallary::gallary', ['data' => $data]),
            'page' => $newPage
        ];
    }
}
