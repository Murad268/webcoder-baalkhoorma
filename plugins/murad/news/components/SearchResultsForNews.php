<?php namespace Murad\News\Components;

use Cms\Classes\ComponentBase;
use Murad\News\Models\News;

/**
 * SearchResultsForNews Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SearchResultsForNews extends ComponentBase
{
    public function onRun() {
        $perPage = 9;
        $q = $this->param('n');
        $datas = News::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->take($perPage)->get();
        $this->page['datas'] = $datas;
        $this->page['page'] = $perPage;
        $this->page['q'] = $q;
        $hasButton = $perPage >= News::count();
        $this->page['hasButton'] = !$hasButton;


    }

    public function componentDetails()
    {
        return [
            'name' => 'SearchResultsForNews Component',
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

        $q = $this->param('n');

        $perPage = 4;
        $newPage = $page + $perPage;
        $datas = News::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->skip($page)->take($perPage)->get();


        return [
            'html' => $this->renderPartial('search_results', ['datas' => $datas]),
            'page' => $newPage,
        ];
    }
}
