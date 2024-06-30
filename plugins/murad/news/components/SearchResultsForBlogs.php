<?php namespace Murad\News\Components;

use Cms\Classes\ComponentBase;
use Murad\News\Models\News;
use Murad\Recipes\Models\RECIPES;

/**
 * SearchResultsForBlogs Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SearchResultsForBlogs extends ComponentBase
{
    public function onRun()
    {
        $perPage = 9;
        $q = $this->param('q');
        $news = News::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->take($perPage)->get();;
        $recipes = RECIPES::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->take($perPage)->get();;

        $recipes = $recipes->map(function ($item)  {
            $item['type'] = 'recipes';
            return $item;
        });
        $news = $news->map(function ($item) {
            $item['type'] = 'news';
            return $item;
        });
        $datas = $news->merge($recipes);


        $this->page['datas'] = $datas;
        $this->page['page'] = $perPage;
        $this->page['q'] = $q;
        

    }
    public function componentDetails()
    {
        return [
            'name' => 'SearchResultsForBlogs Component',
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
        $news = News::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->skip($page)->take($perPage)->get();
        $recipes = RECIPES::orderByDesc('created_at')->where('title', 'LIKE', "%{$q}%")->where('is_active', 1)->skip($page)->take($perPage)->get();

        $datas = $news->merge($recipes);

        $this->page['datas'] = $datas;
        $this->page['page'] = $perPage;

        return [
            'html' => $this->renderPartial('search_results', ['datas' => $datas]),
            'page' => $newPage
        ];
    }
}
